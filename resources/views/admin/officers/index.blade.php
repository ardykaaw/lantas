@extends('admin.layout.app')

@section('content')
<style>
  .custom-table-card { border: none; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.03); }
  .custom-table-card .card-header { background: transparent; border-bottom: 1px solid rgba(0,0,0,0.05); padding: 1.5rem; }
  .custom-table tbody tr { transition: background 0.2s; }
  .custom-table tbody tr:hover { background: rgba(0, 35, 102, 0.02); }
  .custom-table td, .custom-table th { padding: 1rem 1.5rem; border-bottom: 1px solid rgba(0,0,0,0.03); }
  .officer-thumbnail { width: 50px; height: 50px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
</style>

<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Profil Pimpinan</h2>
      </div>
      <div class="col-auto ms-auto">
        <div class="btn-list">
          <a href="{{ route('admin.pejabat.create') }}" class="btn btn-primary d-none d-sm-inline-block">
            <i class="ti ti-plus me-2"></i> Tambah Pejabat
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

    <div class="card custom-table-card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title fw-bold mb-0">Manajemen Profil Pejabat Lantas</h3>
      </div>
      <div class="table-responsive">
        <table class="table custom-table table-vcenter text-nowrap mb-0">
          <thead class="text-muted" style="background: #fafafa;">
            <tr>
              <th class="w-1">No</th>
              <th>Nama & Jabatan</th>
              <th>Urutan Tampil</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($officers as $index => $officer)
            <tr>
              <td><span class="text-muted">{{ $index + 1 }}</span></td>
              <td>
                <div class="d-flex align-items-center">
                  @if($officer->image)
                    <img src="{{ asset('storage/' . $officer->image) }}" class="officer-thumbnail me-3" alt="Thumb">
                  @else
                    <div class="officer-thumbnail me-3 bg-light d-flex align-items-center justify-content-center text-muted">
                        <i class="ti ti-user" style="font-size: 1.5rem;"></i>
                    </div>
                  @endif
                  <div>
                    <span class="text-dark fw-bold d-block">{{ $officer->name }}</span>
                    <small class="text-muted">{{ $officer->position }}</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge bg-blue-lt">Urutan ke-{{ $officer->sort_order }}</span>
              </td>
              <td class="text-end">
                <a href="{{ route('admin.pejabat.edit', $officer->id) }}" class="btn btn-icon btn-outline-secondary btn-sm rounded-circle me-1"><i class="ti ti-edit"></i></a>
                <form action="{{ route('admin.pejabat.destroy', $officer->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus pejabat ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-icon btn-outline-danger btn-sm rounded-circle"><i class="ti ti-trash"></i></button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-4 text-muted">Belum ada data pimpinan.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
@endsection
