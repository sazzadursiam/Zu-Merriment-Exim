<nav class="dashboard-nav-list">
    <a href="{{ route('admin.dashboard') }}" class="dashboard-nav-item @yield('dashboard_menu_active')">
        <i class="fa-solid fa-table-cells-large"></i> Dashboard
    </a>

    <h4 class="text-info dashboard-nav-item" style="font-size: 12px; margin-left: -40px;">Options</h4>

    <div class="dashboard-nav-dropdown @yield('student_menu_show')">
        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
            <i class="fa-solid fa-users"></i> Dropdown menu
        </a>
        <div class="dashboard-nav-dropdown-menu">
            <a href="" class="dashboard-nav-item @yield('add_student_menu_active')">
                Submenu
            </a>

        </div>
    </div>


    <div class="nav-item-divider"></div>
    <a href="{{ route('admin.logout') }}" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i>
        Logout
    </a>
</nav>
