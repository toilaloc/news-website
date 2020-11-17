<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:50',
            'fullname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'thumbnail',
            'address' => 'required',
            'phone' => 'required',
            'bio' => 'string',
            'gender' => 'required',
            'active',
            'vote',
            'status',
            'follower',
            'following',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

            $file_name = $data['thumbnail']->getClientOriginalName();
            $file_path = $data['thumbnail']->move(public_path().'/uploads/users/',$file_name);
        if(empty($file_name)) {
            $file_name = "default.jpg";
        }
        

        return User::create([
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'thumbnail' => $file_name,
            'address' => $data['address'],
            'phone' => $data['phone'],
            'bio' => $data['bio'],
            'gender' => $data['gender'],
            'active' => 0,
            'vote' => 0,
            'status' => 0,
            'follower' => NULL,
            'following' => NULL,
        ]);
    }

}
