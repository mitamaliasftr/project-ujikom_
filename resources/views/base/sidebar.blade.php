<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ url('dashboard') }}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="assets/images/faces/me.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Mita {{-- {{ $user->nama }} --}} </span>
                    <span class="text-secondary text-small">Admin {{-- {{ $user->role }} --}} </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('simulasi-cucian') }}">
                <span class="menu-title">Simulasi Cucian</span>
                <i class="mdi mdi-washing-machine menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-logout text-danger menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->