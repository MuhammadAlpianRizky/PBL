<style>
    .navbar-nav .nav-item .nav-link {
    display: flex;
    align-items: center;
}

.navbar-nav .nav-item .nav-link i {
    margin-right: 5px;
}

.navbar-nav .dropdown-menu {
    background-color: #343a40; /* Match the background color of the navbar */
    border: none;
}

.navbar-nav .dropdown-item {
    color: #fff;
}

.navbar-nav .dropdown-item:hover {
    background-color: #495057; /* Slightly lighter color for hover effect */
}

</style>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a class="navbar-brand" href="{{ route('home1') }}">Akhmad Service AC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home1') }}"><i class="fas fa-fire"></i> Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="layananKamiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fire"></i> Layanan Kami
                </a>
                <div class="dropdown-menu" aria-labelledby="layananKamiDropdown">
                    <a class="dropdown-item" href="{{ route('service') }}">Service AC</a>
                    <a class="dropdown-item" href="{{ route('cuci') }}">Cuci AC</a>
                    <a class="dropdown-item" href="{{ route('pasang') }}">Pasang AC</a>
                    <a class="dropdown-item" href="{{ route('freon') }}">Tambah Freon</a>
                </div>
            </li>
            @role('admin|superadmin')
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-fire"></i> User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('schedule.index') }}"><i class="fas fa-fire"></i> Schedule</a>
            </li> --}}
            @endrole
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.index') }}"><i class="fas fa-fire"></i> Pesan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kontak') }}"><i class="fas fa-fire"></i> Kontak</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="dropdown">
                <a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image"
                        src="{{ asset('img/avatar/avatar-1.png') }}"
                        class="rounded-circle mr-1">
                    @guest
                    <div class="d-sm-none d-lg-inline-block">Customer</div>
                    @else
                    <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
                    @endguest
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @guest
                    <a href="{{ route('login') }}" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Login
                    </a>
                    @else
                    <a href="#" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    @endguest
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
