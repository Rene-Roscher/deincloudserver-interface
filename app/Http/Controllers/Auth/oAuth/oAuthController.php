<?php


namespace App\Http\Controllers\Auth\oAuth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class oAuthController extends Controller
{

    public function callback($provider)
    {
        $oauth = Socialite::driver($provider)->user();
        $user = User::query()->where('email', $oauth->email)->first();
        if($user && $user->exists()) {
            auth()->login($user->first());
            return redirect('customer');
        }
        return view('auth.oauth.oauth', ['data' => ['oauth' => $oauth, 'authorize_type' => strtoupper($provider)]]);
    }

    public function authorizeData(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails()) {
            return redirect(url('/register'))->withErrors($validator->failed());
        }

        $user = $this->create($request->all());

        auth()->login($user);

        return redirect('customer');
    }

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
            'phone_number' => 'required|string|unique:users',
            'account_type' => 'required|in:PRIVATE,COMPANY',
            'company_name' => 'nullable|string|max:255',
            'company_contact' => 'nullable|string',
            'company_ustid' => 'nullable|string',
            'authorize_type' => 'required|in:GOOGLE,TWITTER,GITHUB,FACEBOOK'
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
            'password' => Hash::make(Str::random(1024)),
            'account_type' => $data['account_type'],
            'company_name' => !isset($data['company_name']) ? null : $data['company_name'],
            'company_contact' => !isset($data['company_contact']) ? null : $data['company_contact'],
            'company_ustid' => !isset($data['company_name']) ? null : $data['company_name'],
            'registered_with' => strtoupper($data['authorize_type']),
        ]);
    }

}
