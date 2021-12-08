@extends('dashboard-page.layouts.main')
@section('container')
<div class="form-add-content">
    <div class="top-content">
        <div class="header">
            <h2>Add Member</h2>
        </div>
    </div>
    <div class="content-form">
        <form action="/add" method="POST">
            <div class="name-form">
                Fullname :
            </div>
            <div class="box-form">
                <input type="text" class="form-add" name="fullname" id="fullname">
            </div>
            <div class="name-form">
                University :
            </div>
            <div class="box-form">
                <input type="text" class="form-add" name="univ" id="univ">
            </div>
            <div class="name-form">
                Major :
            </div>
            <div class="box-form">
                <input type="text" class="form-add" name="major" id="major">
            </div>
            <div class="btn-add-member">
                <button class="btn" type="submit" >Add</button>
            </div>
        </form>
</div>
</div>

@endsection