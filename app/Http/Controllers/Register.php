<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Store the incoming blog post.
 *
 * @param  Request  $request
 * @return Response
 */


class Register extends Controller
{
    public function index()
    {
        return view('LoginRegister.register');
    }

    public function store(Request $request)
    {
    $this->validate($request, [
        'username' => 'required|unique:users|min:4|max:24',
        'email' => 'required|email|unique:users',
        'password'         => 'required|min:8|alpha_num',
        'confPassword' => 'required|same:password'
    ]);

        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();


        return view('LoginRegister.login')->with('message','Register Success');
    }
}
