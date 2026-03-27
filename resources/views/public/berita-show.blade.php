<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Ditlantas Polda Sultra</title>
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
        .nav-link { color: rgba(255,255,255,0.8); font-weight: 500; font-family: 'Outfit', sans-serif; transition: color 0.3s; }
        .nav-link:hover { color: var(--polri-gold); }
        
        /* Article Styles - Medium / Journalist style */
        .article-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 3rem 4rem;
            box-shadow: 0 10px 40px rgba(0,35,102,0.04);
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }
        @media (max-width: 768px) {
            .article-container { padding: 2rem 1.5rem; margin-top: -40px; }
        }
        .article-hero {
            height: 450px;
            width: 100%;
            object-fit: cover;
            position: relative;
            z-index: 1;
        }
        .article-hero-wrapper {
            position: relative;
        }
        .article-hero-wrapper::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0; height: 150px;
            background: linear-gradient(to top, var(--bg-light), transparent);
            z-index: 2;
        }
        .article-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
        }
        .article-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            color: #64748b;
            font-size: 0.95rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 2rem;
        }
        .article-content {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #334155;
        }
        .article-content p { margin-bottom: 1.5rem; }
        .article-content img { max-width: 100%; height: auto; border-radius: 12px; margin: 2rem 0; }
        .article-content h2, .article-content h3 { font-weight: 700; color: #1e293b; margin-top: 2.5rem; margin-bottom: 1rem; }
        
        /* Sidebar/Recent Posts */
        .recent-news-card {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
            transition: transform 0.2s;
        }
        .recent-news-card:hover { transform: translateX(5px); }
        .recent-news-img {
            width: 90px;
            height: 90px;
            border-radius: 12px;
            object-fit: cover;
        }
        .recent-news-title {
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 5px;
        }
        .recent-news-title a { color: #1e293b; text-decoration: none; }
        .recent-news-title a:hover { color: var(--polri-blue); }
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita & Info</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Image Area -->
    <div class="article-hero-wrapper bg-dark">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="article-hero" alt="{{ $post->title }}">
        @else
            <div class="article-hero d-flex align-items-center justify-content-center" style="background: linear-gradient(45deg, var(--polri-blue), #1e293b);">
                <i class="ti ti-news text-white opacity-25" style="font-size: 10rem;"></i>
            </div>
        @endif
    </div>

    <!-- Main Content -->
    <div class="container-xl mb-5 pb-5">
        <div class="row justify-content-center">
            
            <div class="col-lg-10 col-xl-8">
                <main class="article-container" id="article-main-content">
                    <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-4 fw-bold" style="font-size: 0.85rem; text-transform: uppercase;">
                        {{ $post->category->name ?? 'Informasi' }}
                    </span>
                    
                    <h1 class="article-title">{{ $post->title }}</h1>
                    
                    <div class="article-meta">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-calendar-event text-primary"></i>
                            <span class="fw-medium text-dark">{{ $post->created_at->format('d M Y, H:i') }} WITA</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="ti ti-user text-primary"></i>
                            <span>Oleh <strong class="text-dark">{{ $post->user->name ?? 'Redaksi Ditlantas' }}</strong></span>
                        </div>
                        <div class="d-flex align-items-center gap-2 ms-auto">
                            <span class="badge bg-light text-muted border px-2 py-1 user-select-none"><i class="ti ti-brand-facebook"></i></span>
                            <span class="badge bg-light text-muted border px-2 py-1 user-select-none"><i class="ti ti-brand-twitter"></i></span>
                            <span class="badge bg-light text-muted border px-2 py-1 user-select-none"><i class="ti ti-brand-whatsapp"></i></span>
                        </div>
                    </div>

                    <div class="article-content">
                        {!! $post->body !!}
                    </div>
                </main>
            </div>

            <!-- Optional Sidebar for Recent Posts on large screens -->
            <div class="col-lg-10 col-xl-4 pt-5 pt-xl-0 mt-xl-4">
                <div class="ps-xl-4 position-sticky" style="top: 100px;">
                    <h4 class="fw-bold mb-4 pb-2 border-bottom" style="font-size: 1.3rem;">Berita Terkini Lainnya</h4>
                    
                    @foreach($recentPosts as $rPost)
                    <div class="recent-news-card">
                        @if($rPost->image)
                            <img src="{{ asset('storage/' . $rPost->image) }}" class="recent-news-img" alt="Thumbnail">
                        @else
                            <div class="recent-news-img bg-light d-flex align-items-center justify-content-center border">
                                <i class="ti ti-photo text-muted" style="font-size: 1.5rem;"></i>
                            </div>
                        @endif
                        <div>
                            <span class="text-primary fw-bold" style="font-size: 0.7rem; text-transform: uppercase;">{{ $rPost->category->name ?? 'Info' }}</span>
                            <h5 class="recent-news-title">
                                <a href="{{ route('berita.show', $rPost->slug) }}">{{ Str::limit($rPost->title, 50) }}</a>
                            </h5>
                            <span class="text-muted small"><i class="ti ti-clock me-1"></i> {{ $rPost->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    @endforeach

                    <div class="mt-4 text-center">
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-primary rounded-pill w-100 fw-bold">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Simple -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container-xl text-center">
            <p class="mb-0 text-white-50">© 2026 Ditlantas Polda Sultra. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- Watermark Script on Copy -->
    <script>
        document.addEventListener('copy', function(e) {
            // Get the selected text
            const selection = document.getSelection();
            if(!selection.toString().length) return;
            
            // Build the watermark text
            const watermark = "\n\nSumber: Ditlantas Polda Sultra\nArtikel: {{ $post->title }}\nSelengkapnya di: " + window.location.href;
            
            // Create a temporary hidden div
            const tempDiv = document.createElement('div');
            tempDiv.style.position = 'absolute';
            tempDiv.style.left = '-99999px';
            tempDiv.innerHTML = selection.toString().replace(/\n/g, '<br>') + '<br><br>' + watermark.replace(/\n/g, '<br>');
            
            document.body.appendChild(tempDiv);
            
            // Select the temporary div
            selection.selectAllChildren(tempDiv);
            
            // Small delay to let the clipboard catch it, then cleanup
            window.setTimeout(function() {
                document.body.removeChild(tempDiv);
            }, 100);
        });
    </script>
</body>
</html>
