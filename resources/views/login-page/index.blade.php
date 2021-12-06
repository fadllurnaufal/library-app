@extends('layouts.main')
@section('container')

<div class="login-page">
    <div class="box-login">
        <div class="heading">
            <h2>Login</h2>
        </div>
        <div class="content-form">
            <form action="/login-page" method="POST">
                @csrf
                <div class="form-email">
                    <input type="email " class="form-control" id="email" placeholder="Email" name="email">  
                </div>
                <div class="form-pass">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="password">  
                </div>
                <div class="btn-login">
                    <button class="btn login btn-login" type="submit" onclick="window.location.href='dashboard-page'">Login</button>
                </div>
                <div class="link">
                    <span class="link-su">Don't have an account?<a href="/registration-page">Click here!</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection