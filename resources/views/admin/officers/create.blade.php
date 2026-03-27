@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Tambah Profil Pejabat</h2>
      </div>
      <div class="col-auto ms-auto">
        <a href="{{ route('admin.pejabat.index') }}" class="btn btn-outline-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card" style="max-width: 800px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
        <div class="card-body p-4">
            <form action="{{ route('admin.pejabat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <div class="mb-3">
                    <label class="form-label required">Nama Lengkap beserta Gelar</label>
                    <input type="text" name="name" class="form-control" placeholder="Cth: Irjen Pol. John Doe, S.I.K." value="{{ old('name') }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label required">Jabatan</label>
                    <input type="text" name="position" class="form-control" placeholder="Cth: Kapolda Sultra" value="{{ old('position') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label required">Urutan Tampil</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 1) }}" required>
                    <small class="text-muted">Digunakan untuk mengurutkan posisi (1 tampil paling atas).</small>
                </div>

                <div class="mb-4">
                    <label class="form-label">Foto Pejabat</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <small class="text-muted">Untuk hasil terbaik, gunakan foto potret tanpa latar belakang atau dengan latar rapi.</small>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-2"></i> Simpan Profil</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
