<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>Login - Admin CMS Ditlantas Polda Sultra</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
      body {
      	font-family: 'Inter', sans-serif;
        background: url('{{ asset('assets/img/photos/city-lights-reflected-in-the-water-at-night.jpg') }}') no-repeat center center fixed;
        background-size: cover;
      }
      .login-overlay {
          position: fixed;
          top: 0; left: 0; right: 0; bottom: 0;
          background: rgba(0, 35, 102, 0.85); /* Polri Dark Blue with opacity */
          backdrop-filter: blur(5px);
          z-index: 0;
      }
      .login-container {
          position: relative;
          z-index: 1;
      }
      .card-login {
          border-radius: 16px;
          border: none;
          box-shadow: 0 20px 40px rgba(0,0,0,0.3);
      }
      .card-login .card-body {
          padding: 3rem;
      }
      .btn-primary {
          background: #D4A843; /* Polri Gold */
          border-color: #D4A843;
          font-weight: 600;
          letter-spacing: 0.5px;
      }
      .btn-primary:hover, .btn-primary:focus {
          background: #B88E2D;
          border-color: #B88E2D;
          color: #fff;
      }
      .login-logo {
          width: 80px;
          margin-bottom: 20px;
          filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
      }
    </style>
  </head>
  <body class=" d-flex flex-column">
    <div class="login-overlay"></div>
    <div class="page page-center login-container">
      <div class="container container-tight py-4">
        
        <div class="card card-login card-md">
          <div class="card-body text-center">
            <h2 class="h2 text-center mb-1">
                <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Logo Lantas" class="login-logo"><br>
                Admin Panel CMS
            </h2>
            <p class="text-muted mb-4">Ditlantas Polda Sulawesi Tenggara</p>
            
            <form action="{{ route('admin.authenticate') }}" method="POST" autocomplete="off" novalidate>
              @csrf
              
              @if($errors->any())
              <div class="alert alert-danger p-2 small">
                  {{ $errors->first() }}
              </div>
              @endif

              <div class="mb-3 text-start">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="admin@lantassultra.id" value="{{ old('email') }}" autocomplete="email" required>
              </div>
              <div class="mb-3 text-start">
                <label class="form-label">
                  Password
                  <span class="form-label-description">
                    <a href="#" style="color: #D4A843;">Lupa Password?</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" name="password" placeholder="Your password" autocomplete="current-password" required>
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                      <i class="ti ti-eye"></i>
                    </a>
                  </span>
                </div>
              </div>
              <div class="mb-3 text-start">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember"/>
                  <span class="form-check-label">Ingat perangkat ini</span>
                </label>
              </div>
              <div class="form-footer mt-4">
                <button type="submit" class="btn btn-primary w-100 py-2">Sign in to Dashboard</button>
              </div>
            </form>
          </div>
        </div>
        
        <div class="text-center text-white mt-4" style="opacity: 0.8; font-size: 0.85rem;">
          &copy; 2026 Direktorat Lalu Lintas Polda Sulawesi Tenggara. All rights reserved.
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
  </body>
</html>
