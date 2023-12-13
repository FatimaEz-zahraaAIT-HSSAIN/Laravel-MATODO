<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    function loginPost(Request $r) {
        $r->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $r->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('todos.index'));
        }
            return redirect()->intended(route('login'))->with("error","Login details aren't valide");
        
    }

    function registerPost(Request $r) {
        $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $r->name;
        $data['email'] = $r->email;
        $data['password'] = Hash::make($r->password);
        $u = User::create($data);

        if(!$u){
            return redirect()->intended(route('register'))->with("error","Registration failed, try again.");
        }
            return redirect()->intended(route('login'));
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('login'))->with("success","You've been loged out successfully");
    }
}
