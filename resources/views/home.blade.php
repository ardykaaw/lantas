@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- ==================== TOP BAR ==================== --}}
    <div class="top-bar d-none d-md-block">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-auto d-flex align-items-center gap-3">
                    <span><i class="ti ti-phone me-1"></i> (0401) 3121110</span>
                    <span><i class="ti ti-mail me-1"></i> lantaspoldasultra@polri.go.id</span>
                </div>
                <div class="col-auto ms-auto d-flex align-items-center gap-3">
                    <div class="running-text" style="max-width: 400px;">
                        <div class="running-text-inner">
                            <i class="ti ti-speakerphone me-1"></i>
                            Selamat datang di Portal Resmi Ditlantas Polda Sulawesi Tenggara — Tertib Berlalu Lintas,
                            Selamat Sampai Tujuan
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="ti ti-brand-facebook"></i></a>
                        <a href="#" title="Instagram"><i class="ti ti-brand-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="ti ti-brand-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ==================== NAVBAR ==================== --}}
    <nav class="navbar navbar-expand-lg navbar-lantas sticky-top">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Logo Lantas"
                    style="height:45px;width:45px;filter:drop-shadow(0 0 4px rgba(255,255,255,0.3));">
                <div>
                    <div style="font-size:1rem;font-weight:800;color:#fff;line-height:1.1;">DITLANTAS</div>
                    <div style="font-size:0.65rem;color:rgba(255,255,255,0.7);font-weight:500;letter-spacing:0.5px;">POLDA
                        SULTRA</div>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">
                            <i class="ti ti-home me-1 d-lg-none"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-building me-1 d-lg-none"></i> Profil
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Visi & Misi</a>
                            <a class="dropdown-item" href="#">Tugas & Fungsi</a>
                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-car me-1 d-lg-none"></i> Layanan
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">SIM</a>
                            <a class="dropdown-item" href="#">STNK</a>
                            <a class="dropdown-item" href="#">BPKB</a>
                            <a class="dropdown-item" href="#">ETLE</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berita.index') }}">
                            <i class="ti ti-news me-1 d-lg-none"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-photo me-1 d-lg-none"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-address-book me-1 d-lg-none"></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ==================== HERO SECTION ==================== --}}
    <section class="hero-section">
        <div class="hero-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="container-xl position-relative" style="z-index: 2;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge mb-3">
                        <i class="ti ti-shield-check"></i>
                        Portal Resmi Ditlantas Polda Sultra
                    </div>
                    <h1 class="hero-title mb-4">
                        Direktorat Lalu Lintas<br>
                        <span>Polda Sulawesi Tenggara</span>
                    </h1>
                    <p class="hero-subtitle mb-4">
                        Komitmen kami adalah memberikan pelayanan terbaik kepada masyarakat,
                        membangun budaya tertib lalu lintas, dan menghadirkan informasi yang
                        transparan, mudah diakses, dan terpercaya.
                    </p>
                    <div class="hero-cta d-flex gap-3 flex-wrap" style="animation: fadeInUp 0.8s ease 0.6s both;">
                        <a href="http://skm-poldasultra.com/" target="_blank" class="btn btn-warning btn-lg px-4"
                            style="background: var(--polri-gold); border: none; color: #000; font-family: 'Outfit'; border-radius: 30px; box-shadow: 0 4px 15px rgba(212, 168, 67, 0.4); font-weight: 600;">
                            <i class="ti ti-clipboard-check me-2" style="font-size: 1.3rem;"></i> Survei Kepuasan
                        </a>
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-light btn-lg px-4"
                            style="border-radius: 30px; font-family: 'Outfit'; font-weight: 600;">
                            <i class="ti ti-news me-2"></i> Berita Terbaru
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block" style="position: static;">
                    {{-- Container for right side elements, spanning full height --}}
                    <div class="h-100 w-100 position-absolute end-0 top-0" style="pointer-events: none; z-index: 1;">

                        {{-- Animated Shield (Restored, placed to the left behind Kapolda) --}}
                        <div
                            style="position: absolute; top: 15%; right: 28%; animation: fadeInUp 1s ease 0.5s both; z-index: 1;">
                            <div
                                style="width: 350px; height: 350px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px dashed rgba(212,168,67,0.3); animation: float 6s ease-in-out infinite;">
                                <div
                                    style="width: 280px; height: 280px; background: rgba(255,255,255,0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="ti ti-shield-check-filled"
                                        style="font-size: 10rem; color: rgba(212,168,67,0.25);"></i>
                                </div>
                            </div>
                            {{-- Floating badges for shield --}}
                            <div
                                style="position: absolute; top: 10px; right: 0px; background: rgba(255,255,255,0.12); backdrop-filter: blur(10px); border-radius: 12px; padding: 12px 16px; animation: float 4s ease-in-out infinite 0.5s;">
                                <div style="color: var(--polri-gold); font-weight: 700; font-size: 1.2rem;">24/7</div>
                                <div style="color: rgba(255,255,255,0.7); font-size: 0.7rem;">Layanan Online</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Absolute anchor for Pimpinan (Kapolda & Dirlantas) --}}
        <div class="position-absolute bottom-0 start-0 w-100 d-flex justify-content-center d-none d-lg-flex"
            style="pointer-events: none; z-index: 2;">
            <div class="container-xl position-relative h-100">
                <div class="hero-pimpinan-wrapper d-flex align-items-end justify-content-end"
                    style="pointer-events: auto; position: absolute; bottom: 0; right: 0; z-index: 2;">

                    {{-- Kapolda (Kiri, Utama/Lebih besar) --}}
                    <div class="position-relative" style="margin-right: -60px; z-index: 3;">
                        <img src="{{ asset('images/kapolda.png') }}" alt="Kapolda Sulawesi Tenggara"
                            class="hero-pejabat-img"
                            style="height: 540px; width: auto; object-fit: contain; margin-bottom: -5px; filter: drop-shadow(-10px 0 20px rgba(0,0,0,0.35)); transition: transform 0.3s ease;">

                        {{-- Name Tag Kapolda --}}
                        <div
                            style="position: absolute; bottom: 15px; left: -20px; z-index: 4; transform: scale(0.85); transform-origin: bottom left;">
                            <div class="liquid-nametag"
                                style="position: static; width: 320px; min-height: 80px; display: flex; flex-direction: column; justify-content: center; margin: 0;">
                                <span class="nametag-title">Kapolda Sulawesi Tenggara</span>
                                <span class="nametag-name" style="font-size: 1.05rem; line-height: 1.2;">Irjen Pol. Didik
                                    Agung Widjanarko, S.I.K., M.H</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dirlantas (Kanan) --}}
                    <div class="position-relative" style="z-index: 2;">
                        <img src="{{ asset('images/dirlantas.png') }}" alt="Dirlantas Polda Sultra" class="hero-pejabat-img"
                            style="height: 480px; width: auto; object-fit: contain; margin-bottom: -5px; filter: drop-shadow(10px 0 20px rgba(0,0,0,0.25)); transition: transform 0.3s ease;">

                        {{-- Name Tag Dirlantas --}}
                        <div
                            style="position: absolute; bottom: 15px; right: 0px; z-index: 4; transform: scale(0.85); transform-origin: bottom right;">
                            <div class="liquid-nametag"
                                style="position: static; width: 320px; min-height: 80px; display: flex; flex-direction: column; justify-content: center; margin: 0;">
                                <span class="nametag-title">Dirlantas Polda Sultra</span>
                                <span class="nametag-name" style="font-size: 1.05rem; line-height: 1.2;">Kombes Pol. Dr.
                                    Argowiyono, S.H., S.I.K., M.Si.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SAMBUTAN / PEJABAT ==================== --}}
    <section class="sambutan-section section-padding" id="sambutan">
        <div class="container-xl">
            <div class="text-center mb-5">
                <h2 class="section-title section-title-center animate-on-scroll">Pimpinan</h2>
                <p class="section-subtitle mx-auto mt-3 animate-on-scroll delay-1">
                    Pimpinan Direktorat Lalu Lintas Polda Sulawesi Tenggara yang berkomitmen melayani masyarakat
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Kapolda --}}
                <div class="col-md-5 col-lg-4">
                    <div class="pejabat-card animate-on-scroll delay-1">
                        <div class="pejabat-photo"
                            style="background: linear-gradient(135deg, #1A5DAD, #003580); padding: 0; overflow: hidden; width: 100%; height: 480px; display: flex; align-items: flex-start;">
                            <img src="{{ asset('images/kapolda.png') }}" alt="Kapolda Sultra"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: top center; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));">
                        </div>
                        <div class="pejabat-info">
                            <h5>Irjen Pol. Didik Agung Widjanarko, S.I.K., M.H</h5>
                            <p>Kapolda Sulawesi Tenggara</p>
                        </div>
                    </div>
                </div>

                {{-- Dirlantas --}}
                <div class="col-md-5 col-lg-4">
                    <div class="pejabat-card animate-on-scroll delay-2">
                        <div class="pejabat-photo"
                            style="background: linear-gradient(135deg, #1A5DAD, #003580); padding: 0; overflow: hidden; width: 100%; height: 480px; display: flex; align-items: flex-start;">
                            <img src="{{ asset('images/dirlantas.png') }}" alt="Dirlantas Polda Sultra"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: top center; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));">
                        </div>
                        <div class="pejabat-info">
                            <h5>Kombes Pol. Dr. Argowiyono, S.H., S.I.K., M.Si.</h5>
                            <p>Dirlantas Polda Sulawesi Tenggara</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sambutan --}}
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="animate-on-scroll delay-3"
                        style="background: linear-gradient(135deg, #f8f9fa, #e8edf5); border-radius: 16px; padding: 32px; border-left: 4px solid var(--polri-gold);">
                        <div class="d-flex align-items-start gap-3">
                            <div>
                                <i class="ti ti-quote"
                                    style="font-size: 2.5rem; color: var(--polri-gold); opacity: 0.4;"></i>
                            </div>
                            <div>
                                <p style="font-size: 1rem; line-height: 1.8; color: #495057; font-style: italic;">
                                    Selamat datang di website resmi Direktorat Lalu Lintas Polda Sulawesi Tenggara.
                                    Kami berkomitmen untuk memberikan pelayanan prima kepada masyarakat, menegakkan hukum
                                    dengan adil,
                                    dan mewujudkan ketertiban lalu lintas demi keselamatan seluruh pengguna jalan di
                                    Sulawesi Tenggara.
                                </p>
                                <div class="mt-3">
                                    <strong style="color: var(--polri-blue-dark);">Dirlantas Polda Sulawesi
                                        Tenggara</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== LAYANAN ==================== --}}
    <section class="layanan-section section-padding" id="layanan">
        <div class="container-xl">
            <div class="text-center mb-5">
                <h2 class="section-title section-title-center animate-on-scroll">Layanan Kami</h2>
                <p class="section-subtitle mx-auto mt-3 animate-on-scroll delay-1">
                    Berbagai layanan lalu lintas untuk kemudahan masyarakat Sulawesi Tenggara
                </p>
            </div>

            <div class="row g-4">
                {{-- SIM --}}
                <div class="col-md-6 col-lg-3">
                    <div class="layanan-card animate-on-scroll delay-1">
                        <div class="layanan-icon" style="background: rgba(0,53,128,0.08); color: var(--polri-blue);">
                            <i class="ti ti-id-badge-2"></i>
                        </div>
                        <h5>SIM</h5>
                        <p>Layanan pembuatan dan perpanjangan Surat Izin Mengemudi untuk seluruh jenis kendaraan.</p>
                        <a href="#" class="btn btn-sm btn-lantas-outline-primary mt-2 rounded-pill">
                            Selengkapnya <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>

                {{-- STNK --}}
                <div class="col-md-6 col-lg-3">
                    <div class="layanan-card animate-on-scroll delay-2">
                        <div class="layanan-icon" style="background: rgba(39,174,96,0.08); color: #27AE60;">
                            <i class="ti ti-file-certificate"></i>
                        </div>
                        <h5>STNK</h5>
                        <p>Pengurusan Surat Tanda Nomor Kendaraan bermotor baru maupun perpanjangan.</p>
                        <a href="#" class="btn btn-sm btn-lantas-outline-success mt-2 rounded-pill">
                            Selengkapnya <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>

                {{-- BPKB --}}
                <div class="col-md-6 col-lg-3">
                    <div class="layanan-card animate-on-scroll delay-3">
                        <div class="layanan-icon" style="background: rgba(212,168,67,0.1); color: var(--polri-gold);">
                            <i class="ti ti-certificate"></i>
                        </div>
                        <h5>BPKB</h5>
                        <p>Pengurusan Buku Pemilik Kendaraan Bermotor untuk kepemilikan kendaraan.</p>
                        <a href="#" class="btn btn-sm btn-lantas-outline-warning mt-2 rounded-pill">
                            Selengkapnya <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>

                {{-- ETLE --}}
                <div class="col-md-6 col-lg-3">
                    <div class="layanan-card animate-on-scroll delay-4">
                        <div class="layanan-icon" style="background: rgba(192,57,43,0.08); color: var(--polri-red);">
                            <i class="ti ti-camera"></i>
                        </div>
                        <h5>E-TLE</h5>
                        <p>Electronic Traffic Law Enforcement — sistem tilang elektronik untuk tertib lalu lintas.</p>
                        <a href="#" class="btn btn-sm btn-lantas-outline-danger mt-2 rounded-pill">
                            Selengkapnya <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== STATISTIK ==================== --}}
    <section class="stats-section section-padding" id="statistik">
        <div class="container-xl position-relative" style="z-index: 1;">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-number counter" data-target="125000">0</div>
                        <div class="stat-label">SIM Diterbitkan</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-item animate-on-scroll delay-1">
                        <div class="stat-number counter" data-target="89000">0</div>
                        <div class="stat-label">Kendaraan Terdaftar</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-item animate-on-scroll delay-2">
                        <div class="stat-number counter" data-target="15" data-suffix=" Satpas">0</div>
                        <div class="stat-label">Unit Pelayanan</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-item animate-on-scroll delay-3">
                        <div class="stat-number counter" data-target="17" data-suffix=" Kab/Kota">0</div>
                        <div class="stat-label">Wilayah Cakupan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== CCTV TERKINI ==================== --}}
    <section class="cctv-section section-padding" id="cctv" style="background-color: #f8f9fa;">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="section-title animate-on-scroll">Pantauan Lalu Lintas Terkini</h2>
                    <p class="section-subtitle mt-2 animate-on-scroll delay-1">
                        Kondisi arus lalu lintas real-time di titik-titik krusial Sulawesi Tenggara
                    </p>
                </div>
                <a href="{{ route('cctv') }}"
                    class="btn btn-lantas-outline-danger rounded-pill d-none d-md-inline-flex animate-on-scroll">
                    Lihat Semua CCTV <i class="ti ti-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <!-- CCTV Preview 1 -->
                <div class="col-md-6">
                    <div class="cctv-card preview-card animate-on-scroll delay-1"
                        style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); background: #fff;">
                        <div
                            style="padding: 12px 15px; background: #0f2027; color: #fff; display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="margin: 0; font-size: 1rem; font-family: 'Outfit', sans-serif;">1. Simpang Mandonga
                            </h3>
                            <span
                                style="background: #e74c3c; color: white; padding: 3px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; display: flex; align-items: center; gap: 4px; box-shadow: 0 0 8px rgba(231,76,60,0.5);">
                                <i class="ti ti-point-filled" style="animation: pulse 1s infinite alternate;"></i> LIVE
                            </span>
                        </div>
                        <div
                            style="position: relative; padding-bottom: 56.25%; height: 0; background: #0a0a0a; overflow: hidden;">
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; background: linear-gradient(transparent 50%, rgba(0,0,0,0.25) 50%); background-size: 100% 4px; z-index: 1;">
                            </div>
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; box-shadow: inset 0 0 100px rgba(0,0,0,0.9); z-index: 2;">
                            </div>
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; display: flex; align-items: center; justify-content: center; flex-direction: column; color: rgba(255,255,255,0.7); z-index: 3;">
                                <i class="ti ti-camera-off"
                                    style="font-size: 3.5rem; margin-bottom: 15px; opacity: 0.4; color: #a5b1c2;"></i>
                                <div
                                    style="font-family: 'Courier New', monospace; font-size: 1.1rem; letter-spacing: 3px; font-weight: bold; color: #e74c3c;">
                                    MENUNGGU KONEKSI</div>
                                <div
                                    style="font-family: 'Courier New', monospace; font-size: 0.75rem; letter-spacing: 1px; margin-top: 10px; opacity: 0.6; text-align: center; padding: 0 15px;">
                                    Mempersiapkan IP Publik CCTV . . .</div>
                                <div
                                    style="position: absolute; top: 15px; left: 20px; font-family: monospace; font-size: 0.85rem; opacity: 0.7;">
                                    CAM 01 - SIMPANG MANDONGA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCTV Preview 2 -->
                <div class="col-md-6">
                    <div class="cctv-card preview-card animate-on-scroll delay-2"
                        style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); background: #fff;">
                        <div
                            style="padding: 12px 15px; background: #0f2027; color: #fff; display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="margin: 0; font-size: 1rem; font-family: 'Outfit', sans-serif;">2. Bundaran Pesawat
                            </h3>
                            <span
                                style="background: #e74c3c; color: white; padding: 3px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; display: flex; align-items: center; gap: 4px; box-shadow: 0 0 8px rgba(231,76,60,0.5);">
                                <i class="ti ti-point-filled" style="animation: pulse 1s infinite alternate;"></i> LIVE
                            </span>
                        </div>
                        <div
                            style="position: relative; padding-bottom: 56.25%; height: 0; background: #0a0a0a; overflow: hidden;">
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; background: linear-gradient(transparent 50%, rgba(0,0,0,0.25) 50%); background-size: 100% 4px; z-index: 1;">
                            </div>
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; box-shadow: inset 0 0 100px rgba(0,0,0,0.9); z-index: 2;">
                            </div>
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; display: flex; align-items: center; justify-content: center; flex-direction: column; color: rgba(255,255,255,0.7); z-index: 3;">
                                <i class="ti ti-camera-off"
                                    style="font-size: 3.5rem; margin-bottom: 15px; opacity: 0.4; color: #a5b1c2;"></i>
                                <div
                                    style="font-family: 'Courier New', monospace; font-size: 1.1rem; letter-spacing: 3px; font-weight: bold; color: #e74c3c;">
                                    MENUNGGU KONEKSI</div>
                                <div
                                    style="font-family: 'Courier New', monospace; font-size: 0.75rem; letter-spacing: 1px; margin-top: 10px; opacity: 0.6; text-align: center; padding: 0 15px;">
                                    Mempersiapkan IP Publik CCTV . . .</div>
                                <div
                                    style="position: absolute; top: 15px; left: 20px; font-family: monospace; font-size: 0.85rem; opacity: 0.7;">
                                    CAM 02 - BUNDARAN PESAWAT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 d-md-none">
                <a href="{{ route('cctv') }}" class="btn btn-lantas-outline-danger rounded-pill">
                    Lihat Semua CCTV <i class="ti ti-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================== BERITA TERBARU ==================== --}}
    <section class="berita-section section-padding" id="berita">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="section-title animate-on-scroll">Berita Terbaru</h2>
                    <p class="section-subtitle mt-3 animate-on-scroll delay-1">
                        Informasi dan berita terkini seputar lalu lintas di Sulawesi Tenggara
                    </p>
                </div>
                <a href="{{ route('berita.index') }}"
                    class="btn btn-lantas-outline-primary rounded-pill d-none d-md-inline-flex animate-on-scroll">
                    Semua Berita <i class="ti ti-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4 d-flex align-items-stretch">
                @if($posts->count() > 0)
                        {{-- Featured Berita (Left Large) --}}
                        <div class="col-lg-7">
                            <div class="berita-card h-100 animate-on-scroll delay-1 position-relative overlay-card"
                                style="border-radius: 20px; min-height: 480px;">
                                @if($posts[0]->image)
                                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}"
                                        class="w-100 h-100 position-absolute"
                                        style="object-fit: cover; z-index: 0; filter: brightness(0.85);">
                                @else
                                    <div class="w-100 h-100 position-absolute d-flex align-items-center justify-content-center bg-secondary"
                                        style="z-index: 0;">
                                        <i class="ti ti-photo" style="font-size: 5rem; color: rgba(255,255,255,0.2);"></i>
                                    </div>
                                @endif
                                <div class="position-absolute w-100 h-100"
                                    style="background: linear-gradient(to top, rgba(0,35,102,0.95) 0%, rgba(0,35,102,0.2) 60%, transparent 100%); z-index: 1;">
                                </div>
                                <div class="d-flex flex-column justify-content-end h-100 p-4 p-md-5 position-relative"
                                    style="z-index: 2;">
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 align-self-start fw-bold"
                                        style="font-size: 0.8rem; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">🔴 Sorotan Utama</span>
                                    <h3 class="text-white fw-bold mb-3 lh-sm"
                                        style="font-size: 2rem; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">
                                        <a href="{{ route('berita.show', $posts[0]->slug) }}"
                                            class="text-white text-decoration-none highlight-hover">{{ $posts[0]->title }}</a>
                                    </h3>
                                    <p class="text-white-50 mb-4" style="font-size: 1.05rem;">{!!
                    Str::words(strip_tags($posts[0]->body), 20, '...') !!}</p>
                                    <div
                                        class="d-flex align-items-center justify-content-between border-top border-white-50 border-opacity-25 pt-4">
                                        <div class="d-flex align-items-center text-white-50 gap-3">
                                            <span class="d-flex align-items-center"><i class="ti ti-calendar-event me-2"></i> {{
                    $posts[0]->created_at->format('d M Y') }}</span>
                                            <span class="d-flex align-items-center"><i class="ti ti-user me-2"></i> {{
                    $posts[0]->user->name ?? 'Admin' }}</span>
                                        </div>
                                        <a href="{{ route('berita.show', $posts[0]->slug) }}"
                                            class="text-white fw-bold text-decoration-none d-flex align-items-center"
                                            style="letter-spacing: 0.5px;">Baca Artikel <i
                                                class="ti ti-arrow-right ms-2 transition-transform"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Side Berita (Right Stacked) --}}
                        <div class="col-lg-5 d-flex flex-column gap-4">
                            @foreach($posts->skip(1)->take(3) as $sidePost)
                                    <div class="card border-0 h-100 animate-on-scroll delay-2 shadow-sm rounded-4 overflow-hidden bg-white hover-up"
                                        onclick="window.location='{{ route('berita.show', $sidePost->slug) }}'"
                                        style="transition: transform 0.3s; cursor: pointer;">
                                        <div class="row g-0 h-100">
                                            <div class="col-4 col-sm-4 h-100">
                                                @if($sidePost->image)
                                                    <img src="{{ asset('storage/' . $sidePost->image) }}" class="img-fluid w-100 h-100"
                                                        alt="{{ $sidePost->title }}" style="object-fit: cover;">
                                                @else
                                                    <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-photo" style="font-size: 2rem; color: rgba(0,0,0,0.1);"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-8 col-sm-8 d-flex align-items-center">
                                                <div class="card-body p-3 p-xl-4">
                                                    <span class="text-primary fw-bold text-uppercase mb-2 d-block"
                                                        style="font-size: 0.75rem; letter-spacing: 1px;">{{ $sidePost->category->name ??
                                'Publikasi' }}</span>
                                                    <h5 class="card-title fw-bold lh-sm mb-2" style="font-size: 1.15rem;">
                                                        <a href="{{ route('berita.show', $sidePost->slug) }}"
                                                            class="text-dark text-decoration-none">{{ Str::limit($sidePost->title, 55)
                                                                                }}</a>
                                                    </h5>
                                                    <p class="card-text text-muted small"><i class="ti ti-clock me-1"></i> {{
                                $sidePost->created_at->format('d M Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                @else
                    <div class="col-12 text-center py-5">
                        <i class="ti ti-news text-muted opacity-25" style="font-size: 4rem;"></i>
                        <p class="mt-3 text-muted">Belum ada berita yang dipublikasikan.</p>
                    </div>
                @endif
            </div>

            <div class="text-center mt-4 d-md-none">
                <a href="{{ route('berita.index') }}" class="btn btn-lantas-outline-primary rounded-pill">
                    Semua Berita <i class="ti ti-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================== INSTAGRAM FEED (PLACEHOLDER) ==================== --}}
    <section class="instagram-section section-padding" id="instagram">
        <style>
            /* CSS untuk menghilangkan Header & Branding bawaan EmbedSocial */
            .es-widget-header,
            .es-widget-header-bottom,
            .es-header-container,
            .feed-powered-by-es {
                display: none !important;
            }

            #instagram-feed-container {
                border: none !important;
                padding: 0 !important;
                background: transparent !important;
            }
        </style>
        <div class="container-xl">
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-center align-items-md-end mb-4 mb-md-5">
                <div class="text-center text-md-start mb-3 mb-md-0">
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-2 animate-on-scroll">
                        <i class="ti ti-brand-instagram" style="font-size: 2rem; color: #E1306C;"></i>
                        <h2 class="section-title mb-0" style="padding-bottom: 0;">Galeri Instagram</h2>
                    </div>
                    <p class="section-subtitle mt-2 animate-on-scroll delay-1">
                        Ikuti kegiatan terbaru kami di Instagram resmi @ditlantas_polda_sultra
                    </p>
                </div>
                <a href="https://instagram.com/ditlantas_polda_sultra" target="_blank"
                    class="btn btn-primary btn-instagram rounded-pill animate-on-scroll delay-2">
                    <i class="ti ti-brand-instagram me-2"></i> Follow Kami
                </a>
            </div>

            {{-- Instagram Widget Container --}}
            <div class="row justify-content-center">
                <div class="col-12 animate-on-scroll delay-3">
                    <div id="instagram-feed-container"
                        style="background: rgba(255,255,255,0.5); border-radius: 20px; padding: 20px; border: 2px dashed rgba(0,0,0,0.05); min-height: 400px; display: flex; align-items: center; justify-content: center; flex-direction: column;">

                        {{--
                        ==========================================================================
                        PASTE YOUR EMBED CODE BELOW (FROM EMBEDSOCIAL / ELFSIGHT / ETC)
                        ==========================================================================
                        --}}

                        <!-- PASTE CODE HERE -->
                        <div class="w-100">
                            <div class="embedsocial-hashtag" data-ref="36eab1fc468244bbc22c9bf185fe1070713e096a"> <a
                                    class="feed-powered-by-es feed-powered-by-es-feed-img es-widget-branding"
                                    href="https://embedsocial.com/instagram-widget/" target="_blank"
                                    title="Instagram widget"> <img
                                        src="https://embedsocial.com/cdn/icon/embedsocial-logo.webp" alt="EmbedSocial">
                                    <div class="es-widget-branding-text">Instagram widget</div>
                                </a> </div>
                            <script> (function (d, s, id) { var js; if (d.getElementById(id)) { return; } js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>
                        </div>

                        {{--
                        ==========================================================================
                        --}}

                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-muted small">
                    <em>*Feed Instagram diperbarui secara otomatis melalui widget eksternal.</em>
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== QUICK LINKS ==================== --}}
    <section style="background: linear-gradient(135deg, #f3f6fb 0%, #e8edf5 100%);" class="section-padding" id="links">
        <div class="container-xl">
            <div class="text-center mb-5">
                <h2 class="section-title section-title-center animate-on-scroll">Akses Cepat</h2>
                <p class="section-subtitle mx-auto mt-3 animate-on-scroll delay-1">
                    Tautan cepat untuk mengakses layanan dan informasi Ditlantas
                </p>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="card card-link card-sm text-center py-4 animate-on-scroll delay-1"
                        style="border-radius:16px; text-decoration:none; transition: all 0.3s;">
                        <i class="ti ti-chart-bar"
                            style="font-size: 2.2rem; color: var(--polri-blue); margin-bottom: 8px;"></i>
                        <span
                            style="font-weight: 600; font-size: 0.85rem; color: var(--polri-blue-dark);">Dashboard<br>Lalin</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="card card-link card-sm text-center py-4 animate-on-scroll delay-2"
                        style="border-radius:16px; text-decoration:none; transition: all 0.3s;">
                        <i class="ti ti-file-search" style="font-size: 2.2rem; color: #27AE60; margin-bottom: 8px;"></i>
                        <span
                            style="font-weight: 600; font-size: 0.85rem; color: var(--polri-blue-dark);">Cek<br>Tilang</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="card card-link card-sm text-center py-4 animate-on-scroll delay-3"
                        style="border-radius:16px; text-decoration:none; transition: all 0.3s;">
                        <i class="ti ti-car" style="font-size: 2.2rem; color: var(--polri-gold); margin-bottom: 8px;"></i>
                        <span
                            style="font-weight: 600; font-size: 0.85rem; color: var(--polri-blue-dark);">Cek<br>Ranmor</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="card card-link card-sm text-center py-4 animate-on-scroll delay-4"
                        style="border-radius:16px; text-decoration:none; transition: all 0.3s;">
                        <i class="ti ti-map-pin"
                            style="font-size: 2.2rem; color: var(--polri-red); margin-bottom: 8px;"></i>
                        <span
                            style="font-weight: 600; font-size: 0.85rem; color: var(--polri-blue-dark);">Lokasi<br>Samsat</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="card card-link card-sm text-center py-4 animate-on-scroll delay-4"
                        style="border-radius:16px; text-decoration:none; transition: all 0.3s;">
                        <i class="ti ti-phone-call" style="font-size: 2.2rem; color: #8E44AD; margin-bottom: 8px;"></i>
                        <span
                            style="font-weight: 600; font-size: 0.85rem; color: var(--polri-blue-dark);">Pengaduan<br>Online</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="footer-main">
        <div class="container-xl">
            <div class="row g-4">
                {{-- Logo & Info --}}
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo-lantas-baru.png') }}" alt="Logo Lantas"
                            style="height:45px;width:45px;filter:brightness(0) invert(1) drop-shadow(0 0 4px rgba(255,255,255,0.2));">
                        <div>
                            <div style="font-size:1rem;font-weight:800;color:#fff;">DITLANTAS</div>
                            <div style="font-size:0.65rem;color:rgba(255,255,255,0.6);">POLDA SULAWESI TENGGARA</div>
                        </div>
                    </div>
                    <p>
                        Direktorat Lalu Lintas Kepolisian Daerah Sulawesi Tenggara berkomitmen
                        memberikan pelayanan terbaik dan mewujudkan ketertiban lalu lintas.
                    </p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="ti ti-brand-facebook"></i></a>
                        <a href="#"><i class="ti ti-brand-instagram"></i></a>
                        <a href="#"><i class="ti ti-brand-youtube"></i></a>
                        <a href="#"><i class="ti ti-brand-twitter"></i></a>
                    </div>
                </div>

                {{-- Link Cepat --}}
                <div class="col-6 col-lg-2">
                    <h5>Menu</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> Beranda</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> Profil</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> Berita</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> Galeri</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> Kontak</a></li>
                    </ul>
                </div>

                {{-- Layanan --}}
                <div class="col-6 col-lg-2">
                    <h5>Layanan</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> SIM</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> STNK</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> BPKB</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> E-TLE</a></li>
                        <li><a href="#"><i class="ti ti-chevron-right" style="font-size:0.8rem;"></i> SIM Keliling</a></li>
                    </ul>
                </div>

                {{-- Kontak --}}
                <div class="col-lg-4">
                    <h5>Kontak Kami</h5>
                    <ul class="footer-links">
                        <li>
                            <a href="#" style="display: flex; align-items: flex-start;">
                                <i class="ti ti-map-pin me-2 mt-1" style="font-size:1rem;"></i>
                                Jl. Boulevard, Kota Kendari, Sulawesi Tenggara
                            </a>
                        </li>
                        <li>
                            <a href="tel:04013121110">
                                <i class="ti ti-phone me-2" style="font-size:1rem;"></i>
                                (0401) 3121110
                            </a>
                        </li>
                        <li>
                            <a href="mailto:lantaspoldasultra@polri.go.id">
                                <i class="ti ti-mail me-2" style="font-size:1rem;"></i>
                                lantaspoldasultra@polri.go.id
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti ti-clock me-2" style="font-size:1rem;"></i>
                                Senin - Jumat: 08.00 - 16.00 WITA
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-bottom text-center">
        <div class="container-xl">
            &copy; {{ date('Y') }} Direktorat Lalu Lintas Polda Sulawesi Tenggara. Hak cipta dilindungi undang-undang.
        </div>
    </div>
@endsection