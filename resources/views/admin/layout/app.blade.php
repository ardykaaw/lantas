<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>Dashboard - Admin CMS Ditlantas Polda Sultra</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
      body {
      	font-family: 'Inter', sans-serif;
        background-color: #f4f6fa;
      }
      .navbar-brand img {
          height: 36px;
          margin-right: 12px;
      }
      .navbar-dark {
          background-color: #002366 !important; /* Polri Blue */
      }
      /* Sidebar Active State */
      .nav-item.active {
          border-left: 3px solid #D4A843;
          background: rgba(212, 168, 67, 0.05);
      }
      .nav-item.active .nav-link-title, .nav-item.active .nav-link-icon {
          color: #D4A843 !important;
          font-weight: 600;
      }
      .page-title {
          font-weight: 700;
          color: #1a1a1a;
      }
    </style>
  </head>
  <body class="layout-fluid">
    <div class="page">
      <!-- Sidebar -->
      <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark border-end" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark mt-3 mb-2">
            <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-white text-decoration-none">
              <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Tabler" class="navbar-brand-image">
              <div class="d-flex flex-column align-items-start" style="line-height: 1.2;">
                  <span style="font-size: 1rem; font-weight: 700; color: #D4A843;">CMS LANTAS</span>
                  <span style="font-size: 0.7rem; color: #a5b3ce;">Polda Sultra</span>
              </div>
            </a>
          </h1>
          <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-home" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Dashboard
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.berita.index') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-news" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Manajemen Berita
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->routeIs('admin.pejabat.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pejabat.index') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-id" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Profil Pimpinan
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-file-certificate" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Layanan
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.galeri.index') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-photo" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Galeri Web
                  </span>
                </a>
              </li>
              <li class="nav-item mt-4">
                <h6 class="navbar-heading text-uppercase text-muted ps-3 mb-1" style="font-size: 0.65rem;">Pengaturan</h6>
                <a class="nav-link" href="#" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="ti ti-settings" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title">
                    Konfigurasi Web
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="nav-link-icon d-md-none d-lg-inline-block text-danger">
                    <i class="ti ti-logout" style="font-size: 1.3rem;"></i>
                  </span>
                  <span class="nav-link-title text-danger">
                    Logout
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      
      <!-- Top navbar -->
      <header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none border-bottom">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav flex-row order-md-last ms-auto">
            <div class="d-none d-md-flex">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <i class="ti ti-moon" style="font-size: 1.2rem;"></i>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <i class="ti ti-sun" style="font-size: 1.2rem;"></i>
              </a>
              <div class="nav-item dropdown d-none d-md-flex me-3 ms-2">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                  <i class="ti ti-bell" style="font-size: 1.2rem;"></i>
                  <span class="badge bg-red badge-blink"></span>
                </a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url({{ asset('assets/img/avatars/000m.jpg') }})"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Super Admin</div>
                  <div class="mt-1 small text-muted">Administrator</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">My Profile</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      
      <!-- Page Content -->
      <div class="page-wrapper">
        @yield('content')
        
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="#" target="_blank" class="link-secondary" rel="noopener">Dokumentasi Tabler</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2026
                    <a href="." class="link-secondary">Ditlantas Polda Sultra</a>.
                    All rights reserved.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @stack('scripts')
  </body>
</html>
