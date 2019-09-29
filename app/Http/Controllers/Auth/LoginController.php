<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\ActivityLogType;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $username = $this->username();
        $validator = Validator::make($request->all(), [
            $username => 'required|string',
            'password' => 'required|string',
        ], [], [
            $username => 'E-Mail',
            'password' => 'Passwort',
        ]);

        if($validator->fails())
            throw ValidationException::withMessages($validator->getMessageBag()->getMessages());

        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $activityLog = null;
        $user = $this->guard()->user();
        $static = User::query()->where('email', $request->get('email'))->first();
        if($static && $static->exists()) {
            $activityLog = new ActivityLog();
            $activityLog->user()->associate($static);
            $activityLog->state = 'FAILED';
            $activityLog->setPayloadAttribute($request, ['remembered' => $request->filled('remember')]);
            $activityLog->activity_log_type_id = 1;
            if(!$user)
                $activityLog->save();
        }

        if ($this->attemptLogin($request)) {

            if(!$activityLog && $static->exists())
                $activityLog = new ActivityLog();

            if($static->exists()){
                $activityLog->activity_log_type_id = 1;
                $activityLog->user_id = $static->id;
                $activityLog->state = 'SUCCEED';
                $activityLog->setPayloadAttribute($request);
                $activityLog->save();
            }

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        if ($user)
            $activityLog->save();

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {

        $activityLog = new ActivityLog();
        $activityLog->activity_log_type_id = 29;
        $activityLog->user_id = $this->user()->id;
        $activityLog->state = 'SUCCEED';
        $activityLog->setPayloadAttribute($request);
        $activityLog->save();

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

}
