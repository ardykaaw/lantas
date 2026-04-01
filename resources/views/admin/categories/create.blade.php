@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Tambah Kategori Baru</h2>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card shadow-sm" style="border-radius: 12px; border: none;">
      <div class="card-body">
        <form action="{{ route('admin.kategori.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label fw-bold">Nama Kategori</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Contoh: Operasi Patuh" required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <small class="form-hint">Slug akan dibuat otomatis berdasarkan nama kategori.</small>
          </div>
          
          <div class="form-footer">
            <button type="submit" class="btn btn-primary px-4 shadow-sm"><i class="ti ti-device-floppy me-2"></i> Simpan Kategori</button>
            <a href="{{ route('admin.kategori.index') }}" class="btn btn-link text-muted">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
