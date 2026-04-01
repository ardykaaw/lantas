@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <div class="page-pretitle">Modul Berita</div>
        <h2 class="page-title">Manajemen Kategori</h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary d-none d-sm-inline-block shadow-sm">
            <i class="ti ti-plus me-2"></i> Tambah Kategori Baru
          </a>
          <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary d-sm-none btn-icon shadow-sm" aria-label="Tambah Kategori Baru">
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

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      <div class="d-flex">
        <div><i class="ti ti-alert-triangle icon alert-icon"></i></div>
        <div>{{ session('error') }}</div>
      </div>
      <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
    @endif

    <div class="card shadow-sm border-0" style="border-radius: 12px;">
      <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
        <h3 class="card-title text-primary fw-bold"><i class="ti ti-tags me-2"></i> Daftar Kategori Berita</h3>
      </div>
      <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable table-hover">
          <thead>
            <tr>
              <th class="w-1">No</th>
              <th>Nama Kategori</th>
              <th>Slug (URL)</th>
              <th>Jumlah Berita</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($categories as $key => $category)
            <tr>
              <td><span class="text-muted">{{ $loop->iteration }}</span></td>
              <td>
                <div class="font-weight-medium fw-bold text-dark">{{ $category->name }}</div>
              </td>
              <td>
                <code class="text-blue">{{ $category->slug }}</code>
              </td>
              <td>
                <span class="badge bg-blue-lt">{{ $category->posts->count() }} Berita</span>
              </td>
              <td class="text-end">
                <div class="btn-list flex-nowrap justify-content-end">
                  <a href="{{ route('admin.kategori.edit', $category->id) }}" class="btn btn-outline-primary btn-sm">
                    <i class="ti ti-edit me-1"></i> Edit
                  </a>
                  <form action="{{ route('admin.kategori.destroy', $category->id) }}" method="POST">
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
                <td colspan="5" class="text-center py-5">
                    <div class="text-muted opacity-50 mb-2"><i class="ti ti-tag-off" style="font-size: 3rem;"></i></div>
                    <p class="text-muted mb-0">Belum ada kategori yang ditambahkan.</p>
                </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
@endsection
