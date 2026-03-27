@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Tambah Media Galeri</h2>
      </div>
      <div class="col-auto ms-auto">
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card" style="max-width: 600px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
        <div class="card-body p-4">
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label required">Keterangan / Judul Media</label>
                    <input type="text" name="title" class="form-control" placeholder="Tuliskan keterangan singkat" value="{{ old('title') }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label required">Tipe Media</label>
                    <select name="type" class="form-select" id="mediaTypeSelect" required>
                        <option value="photo" {{ old('type') == 'photo' ? 'selected' : '' }}>Foto / Gambar</option>
                        <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Video Link (YouTube)</option>
                    </select>
                </div>

                <div class="mb-4" id="photoUploadSection">
                    <label class="form-label required">Upload Foto</label>
                    <input type="file" name="file_path" class="form-control" accept="image/*">
                    <small class="text-muted">Maksimal 5MB. Format JPG, PNG.</small>
                </div>

                <div class="mb-4" id="videoLinkSection" style="display: none;">
                    <label class="form-label required">Link URL YouTube</label>
                    <input type="url" name="link" class="form-control" placeholder="https://youtube.com/watch?v=..." value="{{ old('link') }}">
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary"><i class="ti ti-upload me-2"></i> Tambah ke Galeri</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const select = document.getElementById('mediaTypeSelect');
        const photoSec = document.getElementById('photoUploadSection');
        const videoSec = document.getElementById('videoLinkSection');
        
        select.addEventListener('change', function() {
            if (this.value === 'photo') {
                photoSec.style.display = 'block';
                videoSec.style.display = 'none';
            } else {
                photoSec.style.display = 'none';
                videoSec.style.display = 'block';
            }
        });
        
        // trigger initial state
        select.dispatchEvent(new Event('change'));
    });
</script>
@endsection
