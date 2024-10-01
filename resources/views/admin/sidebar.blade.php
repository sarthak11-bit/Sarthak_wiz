<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    @if (Auth::check() && Auth::user()->role == 1) {{-- Super Admin --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('superadmin.dashboard') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Super Admin Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product') }}">
                <i class="fas fa-fw fa-box"></i>
                <span>Products</span>
            </a>
        </li>
        <!-- Add more Super Admin specific links here -->
    @endif

    <!-- Admin Specific Links -->
    @if (Auth::check() && Auth::user()->role == 2) {{-- Admin --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Admin Dashboard</span>
            </a>
        </li>
        <!-- Add more Admin specific links here -->
    @endif



<!-- Divider -->
<hr class="sidebar-divider">

</ul>