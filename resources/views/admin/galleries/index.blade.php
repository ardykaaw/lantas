@extends('admin.layout.app')

@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Galeri Media</h2>
      </div>
      <div class="col-auto ms-auto">
        <div class="btn-list">
          <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary d-none d-sm-inline-block">
            <i class="ti ti-upload me-2"></i> Unggah Media
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

    <div class="row row-cards">
        @forelse($galleries as $gallery)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100" style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                @if($gallery->type == 'photo' && $gallery->file_path)
                    <div style="height: 180px; background-image: url('{{ asset('storage/' . $gallery->file_path) }}'); background-size: cover; background-position: center;"></div>
                @elseif($gallery->type == 'video')
                    <div style="height: 180px; background-color: #f4f6fa; display:flex; align-items:center; justify-content:center; color: #e74c3c;">
                        <i class="ti ti-brand-youtube" style="font-size: 4rem; opacity: 0.8;"></i>
                    </div>
                @endif
                
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title mb-1" style="font-size: 1rem;">{{ Str::limit($gallery->title, 40) }}</h3>
                    <div class="text-muted small mb-3">
                        @if($gallery->type == 'photo')
                            <span class="badge bg-blue-lt"><i class="ti ti-photo me-1"></i> Foto</span>
                        @else
                            <span class="badge bg-red-lt"><i class="ti ti-video me-1"></i> Video</span>
                        @endif
                        <span class="ms-1">{{ $gallery->created_at->format('d M Y') }}</span>
                    </div>
                    
                    <div class="mt-auto pt-3 border-top d-flex justify-content-between">
                        <form action="{{ route('admin.galeri.destroy', $gallery->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger w-100 btn-delete">
                                <i class="ti ti-trash me-2"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada media galeri.</p>
        </div>
        @endforelse
    </div>
    
    <div class="mt-4">
        {{ $galleries->links('pagination::bootstrap-5') }}
    </div>

  </div>
</div>
@endsection
