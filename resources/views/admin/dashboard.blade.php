@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
          Ikhtisar
        </div>
        <h2 class="page-title">
          Dashboard CMS Ditlantas
        </h2>
      </div>
      <!-- Page title actions -->
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="#" class="btn btn-primary d-none d-sm-inline-block">
            <i class="ti ti-plus me-2"></i>
            Tulis Berita Baru
          </a>
          <a href="#" class="btn btn-primary d-sm-none btn-icon" aria-label="Tulis Berita Baru">
            <i class="ti ti-plus"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Custom Admin Dashboard Styles (Polri Theme) */
  .dash-stat-card {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background: #fff;
      box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  }
  .dash-stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
  }
  .dash-stat-bg-icon {
      position: absolute;
      right: -10px;
      bottom: -15px;
      font-size: 6rem;
      opacity: 0.1;
      transform: rotate(-10deg);
      transition: all 0.3s ease;
  }
  .dash-stat-card:hover .dash-stat-bg-icon {
      transform: scale(1.1) rotate(0deg);
      opacity: 0.15;
  }
  
  .dash-stat-card.polri-blue { background: linear-gradient(135deg, #002366, #1A4080); color: #fff; }
  .dash-stat-card.polri-gold { background: linear-gradient(135deg, #D4A843, #E1BB61); color: #fff; }
  .dash-stat-card.polri-azure { background: linear-gradient(135deg, #007bff, #3395ff); color: #fff; }
  .dash-stat-card.polri-red { background: linear-gradient(135deg, #e74c3c, #f1786c); color: #fff; }

  .dash-stat-val { font-size: 2.5rem; font-weight: 800; line-height: 1; margin-bottom: 5px; }
  .dash-stat-title { font-size: 0.9rem; font-weight: 500; opacity: 0.85; text-transform: uppercase; letter-spacing: 0.5px; }
  
  .custom-table-card {
      border: none;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  }
  .custom-table-card .card-header {
      background: transparent;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      padding: 1.5rem;
  }
  .custom-table tbody tr {
      transition: background 0.2s;
  }
  .custom-table tbody tr:hover {
      background: rgba(0, 35, 102, 0.02); /* Very subtle polri blue hover */
  }
  .custom-table td, .custom-table th {
      padding: 1rem 1.5rem;
      border-bottom: 1px solid rgba(0,0,0,0.03);
  }
  .news-thumbnail {
      width: 48px; height: 48px;
      border-radius: 8px;
      object-fit: cover;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .quick-action-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
  }
  .quick-action-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 1.5rem 1rem;
      background: #f8f9fa;
      border-radius: 16px;
      border: 1px solid rgba(0,0,0,0.05);
      color: #333;
      text-decoration: none;
      transition: all 0.2s;
  }
  .quick-action-btn:hover {
      background: #fff;
      border-color: #002366;
      box-shadow: 0 5px 15px rgba(0, 35, 102, 0.1);
      transform: translateY(-2px);
  }
  .quick-action-icon {
      width: 48px; height: 48px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 10px;
  }
  .qa-blue { background: rgba(0,35,102,0.1); color: #002366; }
  .qa-gold { background: rgba(212,168,67,0.1); color: #D4A843; }
  .qa-green { background: rgba(46,204,113,0.1); color: #2ecc71; }
  .qa-purple { background: rgba(155,89,182,0.1); color: #9b59b6; }

  .chart-container-custom {
      height: 300px;
      border-radius: 16px;
      background: linear-gradient(to bottom, #ffffff, #f1f5f9);
      border: 1px dashed rgba(0,0,0,0.1);
      display: flex; flex-direction: column; align-items: center; justify-content: center;
  }
</style>

<div class="page-body">
  <div class="container-xl">
    
    {{-- Custom Stat Cards --}}
    <div class="row g-4 mb-4">
      <div class="col-sm-6 col-lg-3">
        <div class="dash-stat-card polri-blue p-4">
          <i class="ti ti-news dash-stat-bg-icon"></i>
          <div class="dash-stat-title">Total Berita</div>
          <div class="dash-stat-val">132</div>
          <div class="mt-2 status-text">
            <span class="badge bg-white text-primary me-1"><i class="ti ti-trending-up"></i> 8%</span> naik dari bulan lalu
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-lg-3">
        <div class="dash-stat-card polri-gold p-4">
          <i class="ti ti-users dash-stat-bg-icon"></i>
          <div class="dash-stat-title">Pengunjung Web</div>
          <div class="dash-stat-val">45.2K</div>
          <div class="mt-2 status-text">
            <span class="badge bg-white text-warning me-1"><i class="ti ti-trending-up"></i> 12%</span> traffic organik
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-lg-3">
        <div class="dash-stat-card polri-azure p-4">
          <i class="ti ti-photo dash-stat-bg-icon"></i>
          <div class="dash-stat-title">Galeri Media</div>
          <div class="dash-stat-val">89</div>
          <div class="mt-2 status-text">
            <span class="badge bg-white text-blue me-1"><i class="ti ti-minus"></i> 0%</span> foto & video aktif
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-lg-3">
        <div class="dash-stat-card polri-red p-4">
          <i class="ti ti-report dash-stat-bg-icon"></i>
          <div class="dash-stat-title">Pengaduan Masuk</div>
          <div class="dash-stat-val">12</div>
          <div class="mt-2 status-text">
            <span class="badge bg-white text-danger me-1"><i class="ti ti-alert-circle"></i> Baru</span> perlu tanggapan
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      {{-- Custom Chart Section --}}
      <div class="col-lg-8">
        <div class="card custom-table-card mb-4" style="overflow: visible;">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div>
              <h3 class="card-title fw-bold mb-0">Tren Kunjungan Website (30 Hari)</h3>
              <p class="text-muted small mb-0 mt-1">Gambarkan aktivitas trafik website Ditlantas</p>
            </div>
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Lihat Laporan Lengkap <i class="ti ti-arrow-right ms-1"></i></a>
          </div>
          <div class="card-body p-4 w-100">
            <div class="chart-container-custom">
                <!-- Abstract chart wave visual -->
                <svg width="100%" height="150" viewBox="0 0 1000 150" fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.3;">
                    <path d="M0 150V50C100 20 200 80 300 60C400 40 500 120 600 90C700 60 800 30 900 40C950 45 1000 70 1000 70V150H0Z" fill="url(#paint0_linear_polri)"/>
                    <path d="M0 150V80C150 120 250 10 350 40C450 70 550 130 650 90C750 50 850 70 1000 40V150H0Z" fill="rgba(0,35,102,0.1)"/>
                    <defs>
                        <linearGradient id="paint0_linear_polri" x1="500" y1="0" x2="500" y2="150" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#002366" stop-opacity="0.4"/>
                            <stop offset="1" stop-color="#002366" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="position-absolute text-center mt-3">
                    <div class="spinner-grow text-primary spinner-grow-sm mb-2" role="status"></div>
                    <div class="text-muted fw-medium font-monospace">Memuat data dari Google Analytics API...</div>
                </div>
            </div>
          </div>
        </div>

        {{-- Custom News Table --}}
        <div class="card custom-table-card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title fw-bold mb-0">Berita Terakhir Diterbitkan</h3>
            <div class="input-icon w-auto">
              <span class="input-icon-addon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control form-control-sm rounded-pill" placeholder="Cari artikel...">
            </div>
          </div>
          <div class="table-responsive">
            <table class="table custom-table table-vcenter text-nowrap mb-0">
              <thead class="text-muted" style="background: #fafafa;">
                <tr>
                  <th class="w-1">No</th>
                  <th>Artikel Utama</th>
                  <th>Kategori & Penulis</th>
                  <th>Status</th>
                  <th class="text-end">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="text-muted">1</span></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg') }}" class="news-thumbnail me-3" alt="Thumb">
                      <div>
                        <a href="#" class="text-dark fw-bold text-decoration-none d-block">Operasi Zebra Anoa 2026 Dimulai...</a>
                        <small class="text-muted"><i class="ti ti-clock"></i> 12 Mar 2026, 08:30 WITA</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-blue-lt mb-1">Operasi Kepolisian</span><br>
                    <small class="text-muted">Oleh Super Admin</small>
                  </td>
                  <td>
                    <span class="badge bg-success text-white px-2 py-1" style="border-radius: 6px;"><i class="ti ti-check me-1"></i> Publik</span>
                  </td>
                  <td class="text-end">
                    <button class="btn btn-icon btn-outline-secondary btn-sm rounded-circle me-1"><i class="ti ti-edit"></i></button>
                    <button class="btn btn-icon btn-outline-danger btn-sm rounded-circle"><i class="ti ti-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><span class="text-muted">2</span></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets/img/photos/finances-us-dollars-and-bitcoins-currency-money.jpg') }}" class="news-thumbnail me-3" alt="Thumb">
                      <div>
                        <a href="#" class="text-dark fw-bold text-decoration-none d-block">Layanan SIM Keliling Buka di 5 Titik...</a>
                        <small class="text-muted"><i class="ti ti-clock"></i> 10 Mar 2026, 14:15 WITA</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-cyan-lt mb-1">Pelayanan Publik</span><br>
                    <small class="text-muted">Oleh Tim Humas</small>
                  </td>
                  <td>
                    <span class="badge bg-success text-white px-2 py-1" style="border-radius: 6px;"><i class="ti ti-check me-1"></i> Publik</span>
                  </td>
                  <td class="text-end">
                    <button class="btn btn-icon btn-outline-secondary btn-sm rounded-circle me-1"><i class="ti ti-edit"></i></button>
                    <button class="btn btn-icon btn-outline-danger btn-sm rounded-circle"><i class="ti ti-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><span class="text-muted">3</span></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="news-thumbnail me-3 bg-light d-flex align-items-center justify-content-center text-muted">
                        <i class="ti ti-photo-x" style="font-size: 1.5rem;"></i>
                      </div>
                      <div>
                        <a href="#" class="text-dark fw-bold text-decoration-none d-block">Sosialisasi Keselamatan Berlalulintas...</a>
                        <small class="text-muted"><i class="ti ti-clock"></i> 09 Mar 2026, 16:40 WITA</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-orange-lt mb-1">Edukasi</span><br>
                    <small class="text-muted">Oleh Super Admin</small>
                  </td>
                  <td>
                    <span class="badge bg-warning text-white px-2 py-1" style="border-radius: 6px;"><i class="ti ti-notes me-1"></i> Draft</span>
                  </td>
                  <td class="text-end">
                    <button class="btn btn-icon btn-outline-secondary btn-sm rounded-circle me-1"><i class="ti ti-edit"></i></button>
                    <button class="btn btn-icon btn-outline-danger btn-sm rounded-circle"><i class="ti ti-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex justify-content-between align-items-center text-muted bg-white" style="border-radius: 0 0 16px 16px;">
            <p class="m-0 small">Menampilkan 3 entri terbaru</p>
            <a href="#" class="btn btn-sm btn-ghost-primary">Lihat Semua Berita <i class="ti ti-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      
      {{-- Quick Actions Custom UI --}}
      <div class="col-lg-4">
        
        <div class="card custom-table-card mb-4">
          <div class="card-header border-0 pb-0">
            <h3 class="card-title fw-bold">Pintasan Utama</h3>
          </div>
          <div class="card-body">
             <div class="quick-action-grid">
                <a href="#" class="quick-action-btn">
                    <div class="quick-action-icon qa-blue"><i class="ti ti-edit"></i></div>
                    <span class="fw-bold fs-5">Tulis Berita</span>
                </a>
                <a href="#" class="quick-action-btn">
                    <div class="quick-action-icon qa-gold"><i class="ti ti-user-edit"></i></div>
                    <span class="fw-bold fs-5">Ubah Pejabat</span>
                </a>
                <a href="#" class="quick-action-btn">
                    <div class="quick-action-icon qa-green"><i class="ti ti-file-certificate"></i></div>
                    <span class="fw-bold fs-5">Info Layanan</span>
                </a>
                <a href="#" class="quick-action-btn">
                    <div class="quick-action-icon qa-purple"><i class="ti ti-photo-plus"></i></div>
                    <span class="fw-bold fs-5">Upload Galeri</span>
                </a>
             </div>
          </div>
        </div>

        <div class="card custom-table-card mb-4 border-primary border-top border-3">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="me-3">
                <span class="avatar avatar-md bg-blue-lt rounded-circle"><i class="ti ti-headphones"></i></span>
              </div>
              <div>
                <h4 class="mb-0 fw-bold">Kontak & Bantuan</h4>
                <div class="text-muted small">Update informasi pengaduan</div>
              </div>
            </div>
            <p class="text-muted small mb-3">Jika terjadi perubahan Call Center, nomor WhatsApp, atau Link Maps, segera perbarui di sini.</p>
            <a href="#" class="btn btn-outline-primary w-100 rounded-pill"><i class="ti ti-settings me-1"></i> Atur Kontak</a>
          </div>
        </div>
        
      </div>

    </div>
  </div>
</div>
@endsection
