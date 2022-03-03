<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
    <!-- Navbar Brand-->
    <div class="container-fluid justify-content-between">

        <img src="{{ asset('img/icon_round.png') }}" class="navbar-toggler-icon" alt="JDO">
        <a class="navbar-brand" href="{{ ('/dasboard') }}">Juragan Donat</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ ('/admin-login') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
    </div>
</nav>
