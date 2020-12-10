<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $check = User::where('email', $user->email)->first();
        if ($check) {
            Auth::login($check);
            return redirect('/');
        } else {
            $data = new User;
            $data->username = 'user_facebook' . rand();
            $data->fullname = $user->name;
            $data->email = $user->email;
            $data->password = $user->id;
            $data->thumbnail = $user->avatar;
            $data->active = 1;
            $data->status = 0;
            $data->save();

            Auth::login($data);
            return redirect('/');
        }
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $check = User::where('email', $user->email)->first();
        if ($check) {
            Auth::login($check);
            return redirect('/');
        } else {
            $data = new User;
            $data->username = 'user_google' . rand();
            $data->fullname = $user->getName();
            $data->email = $user->getEmail();
            $data->password = $user->getId();
            $data->thumbnail = $user->getAvatar();
            $data->active = 1;
            $data->status = 0;
            $data->save();

            Auth::login($data);
            return redirect('/');
        }
    }
}
