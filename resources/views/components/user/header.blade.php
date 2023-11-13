<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->


<!-- Topbar Search -->
<a href="{{route('user.home')}}"> <img src="{{asset('img/logodirectory.png')}}" style="width: 100px; height: 40px;" alt=""></a>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome, Amanda</span>
            <img class="img-profile rounded-circle"
                src="{{asset('img/undraw_profile.svg')}}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{route('user.editprofil')}}">
                <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                Edit Profile
            </a>
            <a class="dropdown-item" href="{{route('user.changepassword')}}">
                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                Change Password
            </a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>