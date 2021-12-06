@extends('dashboard-page.layouts.main')
@section('container')
<div class="home-content">
    <div class="title">
        {{ $title }}
    </div>
<hr>
<div class="text">
    <h3>WELCOME, {{ auth()->user()->username }}!</h3>
    <h5>ENJOY YOUR READING</h5>
</div>
    <!--
    <div class="slider">
        <div class="slides">
            <img src="1.jpeg" alt="" class="slide">
            <img src="2.jpeg" alt="" class="slide">
            <img src="3.jpeg" alt="" class="slide">
        </div>
        <input type="radio" name="choose" class="choose">
        <input type="radio" name="choose" class="choose">
        <input type="radio" name="choose" class="choose">
    </div>
-->
</div>
@endsection