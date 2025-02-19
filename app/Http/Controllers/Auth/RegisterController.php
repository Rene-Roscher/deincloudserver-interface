<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'salutation' => 'required|string|max:255|in:MALE,FEMALE',
            'email' => 'required|string|email|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'postcode' => 'required|string',
            'city' => 'required|string',
            'region' => 'required|string',
            'country' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'account_type' => 'required|in:PRIVATE,COMPANY',
            'company_name' => 'string|max:255',
            'company_contact' => 'string',
            'company_ustid' => 'string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'salutation' => $data['salutation'],
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'street' => $data['street'],
            'house_number' => $data['house_number'],
            'postcode' => $data['postcode'],
            'city' => $data['city'],
            'region' => $data['region'],
            'country' => $data['country'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'account_type' => $data['account_type'],
            'company_name' => !isset($data['company_name']) ? null : $data['company_name'],
            'company_contact' => !isset($data['company_contact']) ? null : $data['company_contact'],
            'company_ustid' => !isset($data['company_name']) ? null : $data['company_name'],
        ]);
    }
}
