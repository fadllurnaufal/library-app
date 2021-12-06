@extends('dashboard-page.layouts.main')
@section('container')
<div class="member-main">
    <div class="member-content">
        <div class="header">
            <h2>Library's Member</h2>
        </div>
        <div class="btn-add">
            <a href="/member/add">
                <i data-feather="plus"></i>
            </a>
        </div>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search..." name="search">
        <div class="search-icon">
            <i class="fas fa-search fa-lg"></i>
        </div>
    </div>
</div>
<script>
    
</script>
<!--<script>
    const searchBar = document.querySelector(".search-bar");
    const searchBtn = document.querySelector(".search-icon");
    const searchInput = document.querySelector(".input");
        searchBtn.onclick=()=>{
            searchBar.classList.add("active");
            searchBtn.classList.add("active");
            searchInput.classList.add("active");
            searchInput.focus();
        if(searchInput.value != "");
        var values = searchInput.value;
        sear

        }
</script>-->
@endsection