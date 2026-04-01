@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <div class="page-pretitle">Modul Berita</div>
        <h2 class="page-title">Manajemen Berita Ditlantas</h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="{{ route('admin.berita.create') }}" class="btn btn-primary d-none d-sm-inline-block shadow-sm">
            <i class="ti ti-plus me-2"></i> Tulis Berita Baru
          </a>
          <a href="{{ route('admin.berita.create') }}" class="btn btn-primary d-sm-none btn-icon shadow-sm" aria-label="Tulis Berita Baru">
            <i class="ti ti-plus"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    
    @if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <div class="d-flex">
        <div><i class="ti ti-check icon alert-icon"></i></div>
        <div>{{ session('success') }}</div>
      </div>
      <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
    @endif

    <div class="card shadow-sm border-0" style="border-radius: 12px;">
      <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
        <h3 class="card-title text-primary fw-bold"><i class="ti ti-list me-2"></i> Daftar Berita Terbit & Draft</h3>
      </div>
      <div class="card-body border-bottom py-3">
        <div class="d-flex">
          <div class="text-muted">
            Tampil
            <div class="mx-2 d-inline-block">
              <input type="text" class="form-control form-control-sm" value="10" size="3" aria-label="Invoices count" disabled>
            </div>
            data
          </div>
          <div class="ms-auto text-muted">
            Cari:
            <div class="ms-2 d-inline-block">
              <input type="text" class="form-control form-control-sm" aria-label="Search">
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable table-hover">
          <thead>
            <tr>
              <th class="w-1">No</th>
              <th>Informasi Berita</th>
              <th>Kategori</th>
              <th>Status</th>
              <th>Penulis</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($posts as $key => $post)
            <tr>
              <td><span class="text-muted">{{ $posts->firstItem() + $key }}</span></td>
              <td>
                <div class="d-flex py-1 align-items-center">
                  @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="avatar me-3 rounded" style="object-fit: cover; width: 50px; height: 50px;" alt="Thumb">
                  @else
                    <span class="avatar me-3 rounded bg-blue-lt"><i class="ti ti-photo"></i></span>
                  @endif
                  <div class="flex-fill">
                    <div class="font-weight-medium fw-bold text-dark text-wrap" style="max-width: 350px;">{{ Str::limit($post->title, 60) }}</div>
                    <div class="text-muted mt-1"><i class="ti ti-calendar me-1"></i>{{ $post->created_at->format('d M Y, H:i') }}</div>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge bg-blue-lt">{{ $post->category->name ?? 'Tanpa Kategori' }}</span>
              </td>
              <td>
                @if($post->status == 'published')
                    <span class="badge bg-success-lt"><i class="ti ti-check me-1"></i> Pulikasi</span>
                @else
                    <span class="badge bg-warning-lt"><i class="ti ti-notes me-1"></i> Draft</span>
                @endif
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="avatar avatar-xs rounded-circle bg-blue text-white me-2">{{ substr($post->user->name, 0, 1) }}</span>
                  <span class="text-muted small">{{ $post->user->name }}</span>
                </div>
              </td>
              <td class="text-end">
                <div class="btn-list flex-nowrap justify-content-end">
                  <a href="{{ route('admin.berita.edit', $post->id) }}" class="btn btn-outline-primary btn-sm">
                    <i class="ti ti-edit me-1"></i> Edit
                  </a>
                  <form action="{{ route('admin.berita.destroy', $post->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger btn-sm btn-delete">
                        <i class="ti ti-trash me-1"></i> Hapus
                      </button>
                  </form>
                </div>
              </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center py-5">
                    <div class="text-muted opacity-50 mb-2"><i class="ti ti-file-off" style="font-size: 3rem;"></i></div>
                    <p class="text-muted mb-0">Belum ada berita yang ditulis.</p>
                </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      @if($posts->hasPages())
      <div class="card-footer d-flex align-items-center">
        {{ $posts->links('pagination::bootstrap-5') }}
      </div>
      @endif
    </div>

  </div>
</div>
@endsection
