@extends('layouts.main')
@section('container')

<div class="registration-page">
    <div class="box-registration">
        <div class="heading">
            <h2>Registration</h2>
        </div>
        <div class="content-form">
            <form action="/registration-page" method="POST">
                @csrf
                <div class="form-user">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">  
                </div>
                <div class="form-email">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">  
                </div>
                <div class="form-pass">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="password">  
                </div>
                <div class="form-logas">
                    <select name="logas" id="logas" class="form-control"> 
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>
                <div class="btn-registration">
                    <button class="btn registration btn-registration" onclick="window.location.href='/login-page'">Registration</button>
                </div>
                <div class="link">
                    <span class="link-su">Already have an account?<a href="/login-page">Click here!</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection