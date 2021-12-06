<div class="sidebar">
    <div class="profile-content">
        <i data-feather="menu" id="btn"></i>
        <div class="image">
            
        </div>
        <div class="username">
            {{ auth()->user()->username }}
        </div>
        <div class="email">
            {{ auth()->user()->email }}
        </div>
    
    </div>
    <ul class="nav-list">
        <li>
            <a href="/dashboard-page" class="{{ Request::is('dashboard-page') ? 'active' : ' ' }}">
                <i data-feather="home"></i>
                <span class="links-home">Home</span>
            </a>
        </li>
        <li>
            <a href="/dashboard-page/member" class="{{ Request::is('dashboard-page/member','member/add') ? 'active' : ' ' }}">
                <i data-feather="users"></i>
                <span class="links-name">Member</span>
            </a>
        </li>
        <li>
            <a href="">
                <i data-feather="book"></i>
                <span class="links-name">Collections</span>
            </a>
        </li>
        <li>
            <a href="">
                <i data-feather="bell"></i>
                <span class="links-name">Notification</span>
            </a>
        </li>
        <li>
            <a href="">
                <i data-feather="activity"></i>
                <span class="links-name">Transaction</span>
            </a>
        </li>
        <li>
            <a href="">
                <i data-feather="settings"></i>
                <span class="links-name">Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/logout') }}">
                <i data-feather="log-out"></i>
                <span class="links-name">Logout</span>
            </a>
        </li>
    </ul>
</div>