@extends('layout')
@section('links')
    <link rel="stylesheet" href="css/register.css">
@endsection

@section('content')
<div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,69.3C960,53,1056,43,1152,42.7C1248,43,1344,53,1392,58.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

        <div class="wrapper">
            <div class="form">
                <h2>Register</h2>
                <form action="{{route('register.post')}}" method="POST">
                @csrf
                    <div class="label">
                        <label for="email" style="padding-right: 224px">Full name</label>
                        <input type="text" name="name" >
                    </div>
                    <div class="label">
                        <label for="email" style="padding-right: 246px;">Email</label>
                        <input type="email" name="email" >
                    </div>
                    <div class="label">
                        <label for="password">Password</label>
                        <input type="password" name="password" >
                    </div>
                    <button type="submit" name="submit">Register</button>
                    <p>By continuing you agree to MATODO’s Terms of Service and Privacy Policy.</p>
                    <p id="p2">Do you have an account? <a href="/login">Log in</a></p>
                </form>
            </div>
            
        </div>
    </div>
@endsection
@section('title', 'Register')