@extends('layouts.main')
@section('container')
    <div class="landing-page">
        <div class="logo-wrap">
            <img src="Logo K.svg">
        </div>
        <div class="name-wrap">
            <img src="Kareumbi Farm.svg">
        </div>
        <div class="eclipse-wrap" id="eclipse-out">
            <button class="eclipse1" type="submit" onclick="window.location.href='/login-page'">></button>
        </div>
    </div>
@endsection