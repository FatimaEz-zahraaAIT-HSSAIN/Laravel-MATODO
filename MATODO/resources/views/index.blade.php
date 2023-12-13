@extends('layout')

@section('links')
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('js')
    <script src="js/changeText.js"></script>
@endsection


@section('content')
    <div class="container">
        <div class="wrap">
            <span class="text first-text">Stay </span>
            <span class="text sec-text">organised.</span>

            <div class="button-sec">
                <a href="/register" class="button btn-r"> Register</a>
                <p> or you have an account?<a href="/login" class="btn-l"> Login </a></p>
            </div>
        </div>

        <img src="img/wrap-bg.png" alt="organised background image">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8f8e92" fill-opacity="1" d="M0,0L60,32C120,64,240,128,360,144C480,160,600,128,720,128C840,128,960,160,1080,160C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>
    
@endsection
@section('title', 'Homepage: maToDo')

