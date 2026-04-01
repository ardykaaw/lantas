@extends('admin.layout.app')

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'underline', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });

    // Simple image preview
    document.getElementById('image').addEventListener('change', function(e) {
        if(e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e){
                document.getElementById('img-preview').src = e.target.result;
                document.getElementById('img-preview').style.display = 'block';
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
        font-family: inherit;
        font-size: 1rem;
    }
    .form-label.required:after { content: "*"; color: red; margin-left: 4px; }
</style>
@endpush

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Tulis Berita Baru
        </h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <a href="{{ route('admin.berita.index') }}" class="btn btn-outline-secondary">
          <i class="ti ti-arrow-left me-2"></i> Kembali
        </a>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    
    <div class="card shadow-sm border-0" style="border-radius: 12px;">
      <div class="card-body">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
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
            
            <div class="row row-cards">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label required fw-bold text-dark">Judul Berita</label>
                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Masukkan judul..." value="{{ old('title') }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label required fw-bold text-dark">Isi Konten Berita</label>
                        <textarea id="editor" name="body" class="form-control">{{ old('body') }}</textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-light border-0" style="border-radius: 8px;">
                        <div class="card-body">
                            
                            <div class="mb-4">
                                <label class="form-label required fw-bold text-dark"><i class="ti ti-tag me-1 text-primary"></i> Kategori</label>
                                <select name="category_id" class="form-select" required>
                                    <option value="" disabled selected>-- Pilih Kategori --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-dark"><i class="ti ti-calendar me-1 text-primary"></i> Tanggal Publikasi (Opsional)</label>
                                <input type="datetime-local" name="created_at" class="form-control" value="{{ old('created_at', now()->format('Y-m-d\TH:i')) }}">
                                <small class="form-hint text-muted">Abaikan jika ingin menggunakan waktu saat ini.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label required fw-bold text-dark"><i class="ti ti-send me-1 text-primary"></i> Status Publikasi</label>
                                <select name="status" class="form-select" required>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Publikasikan Segera</option>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Simpan Sebagai Draft</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-dark"><i class="ti ti-photo me-1 text-primary"></i> Foto Utama (Thumbnail)</label>
                                <img id="img-preview" src="" alt="Preview" class="img-fluid rounded border mb-2" style="display: none; max-height: 200px; width: 100%; object-fit: cover;">
                                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                                <small class="form-hint mt-1">Gunakan resolusi yang baik (disarankan landscape 16:9, Maks 5MB).</small>
                            </div>

                            <hr>
                            
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold text-uppercase tracking-wide">
                                <i class="ti ti-device-floppy me-2"></i> Simpan Artikel
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
