@if (Auth::user()->usertype == 'admin')
<body id="body-pd" class="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar shows" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('dashboard') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Inventory</span>
                </a>
                <div class="nav_list">
                    <a href="dashboard" class="nav_link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="users" class="nav_link {{ Request::is('admin/users') ? 'active' : '' }}">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="items" class="nav_link {{ Request::is('admin/items') ? 'active' : '' }}">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Input Barang</span>
                    </a>
                    <a href="harga" class="nav_link {{ Request::is('admin/harga') ? 'active' : '' }}">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

    </div>
</body>
@endif

@if (Auth::user()->usertype == 'user')
<body id="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar shows" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('dashboard') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Inventory</span>
                </a>
                <div class="nav_list">
                    <a href="dashboard" class="nav_link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="items" class="nav_link {{ Request::is('items') ? 'active' : '' }}">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Input Barang</span>
                    </a>
                    <a href="test" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</body>
@endif

