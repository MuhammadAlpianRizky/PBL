<style>
    .navbar-nav .nav-item .nav-link {
    display: flex;
    align-items: center;
}

.navbar-nav .nav-item .nav-link i {
    margin-right: 5px;
}

.navbar-nav .dropdown-menu {
    background-color: #1b1b4f; /* Match the background color of the navbar */
    border: none;
}

.navbar-nav .dropdown-item {
    color: #fff;
}

.navbar-nav .dropdown-item:hover {
    background-color: #495057; /* Slightly lighter color for hover effect */
}

/* Sidebar styles */
.sidebar {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background-color: #d8d7d7;
    padding: 20px;
    z-index: 1000;
    overflow-y: auto;
    transition: transform 0.3s ease;
    transform: translateX(-250px);
}

.sidebar.active {
    transform: translateX(0);
}

.sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #d8d7d7;
}

.sidebar-nav li {
    margin-bottom: 10px;
}

.sidebar-nav a {
    color: #000000;
    text-decoration: none;
    display: block;
    padding: 10px;
}

.sidebar-nav a:hover {
    background-color: #495057;
}

@media (max-width: 1200px) {
    .navbar-toggler {
        display: none; /* Menyembunyikan tombol toggler pada layar kecil */
    }

    .navbar-nav {
        display: none; /* Menyembunyikan navbar links pada layar kecil */
    }
    .sidebar-toggle{
        display: block;
    }
    .sidebar {
        display: block; /* Menampilkan sidebar pada layar kecil */
    }
    .sidebar.active {
        display: block; /* Menampilkan sidebar yang aktif pada layar kecil */
    } 
}

.sidebar-toggle:hover {
    background-color: #28a745;
    color: #fff;
}

.logo{
    width: 250px;
}

.navbar {
    background-color: #474683;
}
.navbar-bg {
    background-color: #474683;
}

 /* Service card styles */
 .service-card {
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px;
    width: calc(300px - 40px);
    box-sizing: border-box;
    text-align: center;
    background-image: linear-gradient(to bottom right, #7473ae, #08041a);
    color: #fff;
    opacity: 0.8; /* Transparansi 80% */
}
    
.service-card5 {
  background-color: #fffcfc;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  box-sizing: border-box;
}

.custom-title {
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  color: #474683;
  font-size: 28px;
  font-weight: bold;
  margin: 10px 0;
}

.section-header2 h1 {
  font-size: 2.5em;
  color: #474683;
  margin-bottom: 0;
}

.services-section2 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  color: #ffffff;
  gap: 20px;
  padding: 50px 0;
}

.service-card2 {
  background-color: rgba(71, 70, 131, 0.75);
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
}

.service-card3 h2 {
  font-size: 2.5em; /* Ukuran font yang besar */
  margin-bottom: 10px; /* Jarak bawah */
  font-weight: bold; /* Teks tebal */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33); /* Bayangan teks hitam dengan transparansi */
  background-image: linear-gradient(30deg, #fff, #ff5400); /* Gradien warna untuk teks */
  color: transparent; /* Teks transparan */
}


.service-card3 h3 {
  font-size: 2em;
  margin-bottom: 10px;
  font-weight: bold; /* Teks tebal */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33); /* Bayangan teks hitam dengan transparansi */
  background-image: linear-gradient(30deg, #fff, #ff5400); /* Gradien warna untuk teks */
  color: transparent; /* Teks transparan */
}

.service-card3 h4 {
  font-size: 1em; /* Ukuran font */
  margin-bottom: 20px; /* Jarak bawah */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Bayangan teks hitam dengan transparansi */
  color: #fff;
}

.services-section3 {
  background-color: #000000;
  background-image: linear-gradient(to bottom right, #7473ae, #08041a);
  padding: 50px 20px;
  text-align: center;
  color: #000000;
}

.section-header2 h1 {
  font-size: 2.5em;
  color: #474683;
  margin-bottom: 0;
  text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
}

.whatsapp-button {
  display: inline-flex;
  background-color: #db7527;
  color: #fff;
  padding: 15px;
  border-radius: 50px;
  text-decoration: none;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  font-weight: bold;
  transition: background-color 0.3s ease to ease-out;
  align-items: center;
}

.whatsapp-button:hover {
  transform: translateY(-10px);
  background-color: #db7527;
  box-shadow: 0 6px 12px rgba(0,0,0,0.3);
  color: #000;
}

.section .section-header h1 {
  margin-bottom: 0;
  font-weight: 700;
  display: inline-block;
  font-size: 24px;
  margin-top: 3px;
  color: #474683;
}

.service-card-service-ac h2 {
  color: #474683;
  font-size: 24px;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.card .card-header h4 {
  font-size: 16px;
  line-height: 28px;
  color: #474683;
  padding-right: 10px;
  margin-bottom: 0;
}

.btn-primary {
  box-shadow: 0 2px 6px #acb5f6;
  background-color: #474683;
  border-color: #474683;
}

.btn-primary:hover {
    background-color: #1b1b4f !important;
}

.colorpesanan {
  color: #1b1b4f;
  font-weight: 900;
}

.btn-info {
  box-shadow: 0 2px 6px #1b1b4f7a;
  background-color: #474683;
  border-color: #474683;
  color: #fff;
}

.btn-info:hover {
    background-color: #1b1b4f !important;
}

.btn.btn-sm {
    padding: 2px 5px;
    font-size: 12px;
}


</style>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a class="navbar-brand" href="{{ route('home1') }}">
        <img class="logo" src="img/Untitled-1.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home1') }}"><i class="fas fa-home"></i> Beranda </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="layananKamiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i> Layanan Kami
                </a>
                <div class="dropdown-menu" aria-labelledby="layananKamiDropdown">
                    <a class="dropdown-item" href="{{ route('service') }}">Service AC</a>
                    <a class="dropdown-item" href="{{ route('cuci') }}">Cuci AC</a>
                    <a class="dropdown-item" href="{{ route('pasang') }}">Pasang AC</a>
                    <a class="dropdown-item" href="{{ route('freon') }}">Tambah Freon</a>
                </div>
            </li>
            @role('user')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('technician.index') }}"><i class="fas fa-fire"></i>Teknisi</a>
            </li>
            @endrole
            @role('admin|superadmin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-fire"></i> User</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('schedule.index') }}"><i class="fas fa-fire"></i> Schedule</a>
            </li> --}}
            @endrole
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.index') }}"><i class="fas fa-tools"></i> Pesan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kontak') }}"><i class="fas fa-address-book"></i> Kontak</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="dropdown">
                <a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <i class="fas fa-sign-out-alt rounded-circle mr-1"></i>
                    @guest
                    <div class="d-sm-none d-lg-inline-block">Customer</div>
                    @else
                    <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
                    @endguest
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @guest
                    <a href="{{ route('login') }}" class="dropdown-item has-icon">
                        <i class="fas fa-sign-in-alt"></i> Login
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
    <button class="sidebar-toggle" id="sidebar-toggle">
        <i class="fas fa-bars"></i>
    </button>
</nav>

<div class="sidebar" id="sidebar">
    <ul class="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link sidebar-nav-link" href="{{ route('home1') }}"><i class="fas fa-fire"></i> Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle sidebar-nav-link" href="#" id="layananKamiDropdownSidebar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fire"></i> Layanan Kami
            </a>
            <div class="dropdown-menu" aria-labelledby="layananKamiDropdownSidebar">
                <a class="dropdown-item sidebar-nav-link" href="{{ route('service') }}">Service AC</a>
                <a class="dropdown-item sidebar-nav-link" href="{{ route('cuci') }}">Cuci AC</a>
                <a class="dropdown-item sidebar-nav-link" href="{{ route('pasang') }}">Pasang AC</a>
                <a class="dropdown-item sidebar-nav-link" href="{{ route('freon') }}">Tambah Freon</a>
            </div>
        </li>
        @role('admin|superadmin')
        {{-- <li class="nav-item">
            <a class="nav-link sidebar-nav-link" href="{{ route('user.index') }}"><i class="fas fa-fire"></i> User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-nav-link" href="{{ route('schedule.index') }}"><i class="fas fa-fire"></i> Schedule</a>
        </li> --}}
        @endrole
        <li class="nav-item">
            <a class="nav-link sidebar-nav-link" href="{{ route('order.index') }}"><i class="fas fa-fire"></i> Pesan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-nav-link" href="{{ route('kontak') }}"><i class="fas fa-fire"></i> Kontak</a>
        </li>
    </ul>
</div>

<script>
  // Get the sidebar toggle button element
const sidebarToggleButton = document.getElementById('sidebar-toggle');

// Get the sidebar element
const sidebar = document.getElementById('sidebar');

// Function to toggle the sidebar visibility
function toggleSidebar() {
  sidebar.classList.toggle('active');
}

// Call the function for the first time on page load (optional, comment out if not needed)
// toggleSidebar();

// Add event listener for toggle button click
sidebarToggleButton.addEventListener('click', toggleSidebar);
</script>
