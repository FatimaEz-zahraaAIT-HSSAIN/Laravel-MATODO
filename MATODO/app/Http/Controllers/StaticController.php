<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }
    public function todo() {
        return view('todo');
    }
    public function edit() {
        return view('todoedit');
    }
}
