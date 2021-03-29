<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Redirect;

class Login extends Controller
{
    public function index()
    {
        return view('LoginRegister.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        //$user = DB::table('users')->where(['username'=>$username, 'password' => $password])->count();

        $user = User::whereUsername($username)->wherePassword(Hash::make($password))->first();

        $input = array(
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),
        );

        if (Auth::attempt($input, false)) {

            return view('home');
        }
        else
        {
            return view('LoginRegister.login')->with('error_message','Username or Password is incorrect');
        }

    }
}
