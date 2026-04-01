<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Berita Ditlantas Polda Sultra</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    
    <style>
        :root {
            --polri-blue: #002366;
            --polri-blue-light: #0A3D91;
            --polri-gold: #D4A843;
            --bg-light: #F8FAFC;
        }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-light); color: #334155; }
        h1, h2, h3, h4, h5 { font-family: 'Outfit', sans-serif; }
        
        .navbar-top { background: var(--polri-blue); padding: 15px 0; border-bottom: 3px solid var(--polri-gold); }
        .page-header-premium { 
            background: linear-gradient(135deg, var(--polri-blue) 0%, var(--polri-blue-light) 100%); 
            padding: 80px 0 60px; 
            color: white; 
            margin-bottom: -50px; 
            position: relative;
        }
        .page-header-premium::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: var(--bg-light);
            clip-path: polygon(0 100%, 100% 100%, 100% 0);
        }
        
        .nav-link { color: rgba(255,255,255,0.8); font-weight: 500; font-family: 'Outfit', sans-serif; transition: color 0.3s; }
        .nav-link:hover { color: var(--polri-gold); }
        
        /* Premium News Cards */
        .news-card-premium {
            background: white;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,35,102,0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .news-card-premium:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,35,102,0.12);
        }
        .news-card-premium .img-wrapper {
            position: relative;
            height: 240px;
            overflow: hidden;
        }
        .news-card-premium img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .news-card-premium:hover img {
            transform: scale(1.08);
        }
        .news-card-premium .card-body {
            padding: 1.8rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .news-category-pill {
            display: inline-block;
            background: rgba(0,35,102,0.05);
            color: var(--polri-blue);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }
        .news-title {
            font-size: 1.3rem;
            font-weight: 800;
            line-height: 1.4;
            margin-bottom: 1rem;
            color: #0f172a;
        }
        .news-title a { color: inherit; text-decoration: none; transition: color 0.2s; }
        .news-title a:hover { color: var(--polri-gold); }
        .news-excerpt {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        .news-meta {
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
            color: #94a3b8;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Modern Pagination UI */
        .modern-pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-top: 3rem;
        }
        .modern-pagination .page-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: white;
            color: #64748b;
            font-weight: 600;
            font-family: 'Outfit';
            text-decoration: none;
            border: 1px solid #e2e8f0;
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .modern-pagination .page-btn:hover {
            border-color: var(--polri-blue);
            color: var(--polri-blue);
        }
        .modern-pagination .page-btn.active {
            background: var(--polri-blue);
            color: white;
            border-color: var(--polri-blue);
            box-shadow: 0 4px 15px rgba(0,35,102,0.2);
        }
        .modern-pagination .page-nav {
            width: auto;
            padding: 0 20px;
        }
        
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-top sticky-top">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Logo Lantas" height="45">
                <div>
                    <div class="text-white fw-bold mb-0 lh-1" style="font-family: 'Outfit'; font-size: 1.2rem; letter-spacing: 0.5px;">DITLANTAS</div>
                    <div class="text-white-50 small lh-1 mt-1" style="font-size: 0.8rem;">POLDA SULTRA</div>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <i class="ti ti-menu-2 text-white fs-2"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1 gap-lg-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-bold" href="#">Berita & Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#instagram">Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Title -->
    <header class="page-header-premium text-center">
        <div class="container-xl position-relative z-1">
            <span class="badge bg-white text-primary rounded-pill px-3 py-2 mb-3 fw-bold shadow-sm">📰 Pusat Informasi Publik</span>
            <h1 class="display-4 fw-bolder mb-3" style="letter-spacing: -1px;">Berita & Kegiatan Lantas</h1>
            <p class="lead mb-0 text-white-50" style="max-width: 650px; margin: 0 auto; font-size: 1.15rem;">
                Dapatkan informasi terkini seputar rekayasa lalu lintas, kegiatan operasional, dan kampanye keselamatan dari Ditlantas Polda Sulawesi Tenggara.
            </p>
        </div>
    </header>

    <!-- Content Area -->
    <div class="container-xl mb-5 pb-5 position-relative z-2">
        
        <!-- Filter Bar -->
        <div class="bg-white p-3 rounded-4 shadow-sm mb-5 border d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div class="d-flex gap-2 overflow-auto w-100" style="white-space: nowrap; scrollbar-width: none;">
                <a href="{{ route('berita.index') }}" class="btn {{ !request('category') ? 'btn-primary' : 'btn-light text-muted border' }} rounded-pill px-4 fw-bold">Semua Kategori</a>
                @foreach($categories as $category)
                <a href="{{ route('berita.index', ['category' => $category->slug]) }}" 
                   class="btn {{ request('category') == $category->slug ? 'btn-primary' : 'btn-light text-muted border' }} rounded-pill px-4">
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
            
            <div class="position-relative w-100" style="max-width: 300px;">
                <input type="text" class="form-control rounded-pill ps-4 py-2 bg-light border-0" placeholder="Ketik kata kunci...">
                <div class="position-absolute top-50 translate-middle-y rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="right: 5px; width: 30px; height: 30px; cursor: pointer;">
                    <i class="ti ti-search" style="font-size: 14px;"></i>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="row g-4 mb-5">
            @forelse($posts as $post)
            <div class="col-md-6 col-lg-4">
                <article class="news-card-premium">
                    <div class="img-wrapper">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        @else
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: #e2e8f0;">
                                <i class="ti ti-photo text-white" style="font-size: 4rem;"></i>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="news-category-pill">{{ $post->category->name ?? 'Informasi' }}</span>
                            <h4 class="news-title">
                                <a href="{{ route('berita.show', $post->slug) }}">{{ Str::limit($post->title, 65) }}</a>
                            </h4>
                            <p class="news-excerpt">{!! Str::words(strip_tags($post->body), 15, '...') !!}</p>
                        </div>
                        <div class="news-meta">
                            <span><i class="ti ti-calendar me-1"></i> {{ $post->created_at->format('d M Y') }}</span>
                            <a href="{{ route('berita.show', $post->slug) }}" class="text-primary fw-bold text-decoration-none d-flex align-items-center">Baca <i class="ti ti-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            @empty
            <div class="col-12 text-center py-5 my-5 bg-white rounded-4 border border-dashed">
                <i class="ti ti-news text-muted opacity-25" style="font-size: 5rem;"></i>
                <h4 class="mt-3 fw-bold text-dark">Belum ada publikasi</h4>
                <p class="text-muted">Arsip berita akan muncul di sini setelah dipublikasikan oleh redaksi.</p>
            </div>
            @endforelse
        </div>

        <!-- NEW MODERN PAGINATION UI -->
        <div class="d-flex justify-content-center mt-5 mb-4 custom-pagination-wrapper">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>

    </div>

    <!-- Footer Simple -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container-xl text-center">
            <p class="mb-0 text-white-50">© 2026 Ditlantas Polda Sultra. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .hover-up:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,35,102,0.1) !important;
        }
        /* Custom Pagination Styling over Bootstrap default */
        .custom-pagination-wrapper .pagination {
            gap: 8px;
        }
        .custom-pagination-wrapper .page-item .page-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 44px;
            height: 44px;
            border-radius: 12px !important;
            background: white;
            color: #64748b;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border: 1px solid #e2e8f0;
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            padding: 0 15px;
        }
        .custom-pagination-wrapper .page-item:not(.active):not(.disabled) .page-link:hover {
            border-color: var(--polri-blue);
            color: var(--polri-blue);
            background: white;
            transform: translateY(-2px);
        }
        .custom-pagination-wrapper .page-item.active .page-link {
            background: var(--polri-blue);
            color: white;
            border-color: var(--polri-blue);
            box-shadow: 0 4px 15px rgba(0,35,102,0.2);
        }
        .custom-pagination-wrapper .page-item.disabled .page-link {
            background: #f8fafc;
            color: #cbd5e1;
            border-color: #e2e8f0;
        }
    </style>
</body>
</html>
