@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Edit Profil Pejabat: {{ $officer->name }}</h2>
      </div>
      <div class="col-auto ms-auto">
        <a href="{{ route('admin.pejabat.index') }}" class="btn btn-outline-secondary">Batal & Kembali</a>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card" style="max-width: 800px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
        <div class="card-body p-4">
            <form action="{{ route('admin.pejabat.update', $officer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
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
                    <input type="text" name="name" class="form-control" value="{{ old('name', $officer->name) }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label required">Jabatan</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position', $officer->position) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label required">Urutan Tampil</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $officer->sort_order) }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Ganti Foto Pejabat</label>
                    @if($officer->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $officer->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 120px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <small class="text-muted d-block mt-1">Biarkan kosong jika tidak ingin mengganti foto saat ini.</small>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-2"></i> Perbarui Profil</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
