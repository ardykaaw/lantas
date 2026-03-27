<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live CCTV - Ditlantas Polda Sulawesi Tenggara</title>
    <!-- Tabler Core -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f4f6f9; }
        .navbar-top { background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); padding: 10px 0; border-bottom: 3px solid #D4A843; }
        .hero-section {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            padding: 80px 0 60px;
            color: white;
            text-align: center;
        }
        .cctv-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            position: relative;
        }
        .cctv-card:hover { transform: translateY(-5px); }
        .cctv-header {
            padding: 12px 15px;
            background: #0f2027;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .cctv-header h3 { margin: 0; font-size: 1rem; font-family: 'Outfit', sans-serif; }
        .live-badge {
            background: #f39c12; /* Warning color to indicate standby */
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            background: #0a0a0a;
            overflow: hidden;
        }
        .video-container .scanline {
            position: absolute; top:0; left:0; width:100%; height:100%; 
            background: linear-gradient(transparent 50%, rgba(0,0,0,0.25) 50%); 
            background-size: 100% 4px; z-index: 1;
        }
        .video-container .vignette {
            position: absolute; top:0; left:0; width:100%; height:100%; 
            box-shadow: inset 0 0 100px rgba(0,0,0,0.9); z-index: 2;
        }
        .video-container .content {
            position: absolute; top:0; left:0; width:100%; height:100%; 
            display: flex; align-items: center; justify-content: center; 
            flex-direction: column; color: rgba(255,255,255,0.7); z-index: 3;
            text-align: center; padding: 0 15px;
        }
        .video-container .content i { font-size: 3.5rem; margin-bottom: 15px; opacity: 0.4; color: #a5b1c2; }
        .video-container .content .title { font-family: 'Courier New', monospace; font-size: 1.1rem; letter-spacing: 3px; font-weight: bold; color: #f39c12; }
        .video-container .content .subtitle { font-family: 'Courier New', monospace; font-size: 0.75rem; letter-spacing: 1px; margin-top: 10px; opacity: 0.6; }
        .video-container .cam-id { position: absolute; top: 15px; left: 20px; font-family: monospace; font-size: 0.85rem; opacity: 0.7; z-index: 3; color: white; }
        footer { background: #0f2027; color: white; padding: 40px 0 20px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-top sticky-top">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Logo Lantas" height="45">
                <div>
                    <div class="text-white fw-bold mb-0 lh-1" style="font-family: 'Outfit'; font-size: 1.2rem; letter-spacing: 0.5px;">DITLANTAS</div>
                    <div class="text-white-50 small lh-1 mt-1" style="font-size: 0.8rem;">POLDA SULTRA</div>
                </div>
            </a>
            <div class="ms-auto d-flex gap-3">
                <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm d-none d-sm-inline-flex">Kembali ke Beranda</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-xl">
            <h1 class="display-4 fw-bold mb-3" style="font-family: 'Outfit';">Live Traffic Monitor</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 600px;">
                CCTV Area Traffic Control System (ATCS) wilayah hukum Polda Sulawesi Tenggara.<br><i>Sistem saat ini sedang dalam tahap integrasi IP Publik.</i>
            </p>
        </div>
    </section>

    <!-- CCTV Grid -->
    <section class="py-5">
        <div class="container-xl">
            <div class="row g-4">
                
                @php
                    $cctvs = [
                        'Simpang Mandonga', 
                        'Bundaran Pesawat', 
                        'Pasar Baru', 
                        'Simpang Kampus UHO', 
                        'Gerbang Perbatasan Kendari', 
                        'Jembatan Teluk Kendari'
                    ];
                @endphp

                @foreach($cctvs as $index => $cctv)
                <!-- CCTV Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="cctv-card">
                        <div class="cctv-header">
                            <h3>{{ $index + 1 }}. {{ $cctv }}</h3>
                            <span class="live-badge"><i class="ti ti-clock-pause"></i> STANDBY</span>
                        </div>
                        <div class="video-container">
                            <div class="scanline"></div>
                            <div class="vignette"></div>
                            <div class="cam-id">CAM 0{{ $index + 1 }}</div>
                            <div class="content">
                                <i class="ti ti-camera-off"></i>
                                <div class="title">MENUNGGU KONEKSI</div>
                                <div class="subtitle">Mempersiapkan IP Publik CCTV . . .</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container-xl text-center">
            <p class="mb-0 text-white-50">© 2024 Ditlantas Polda Sulawesi Tenggara. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
