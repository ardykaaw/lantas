<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|in:photo,video',
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5000',
            'link' => 'nullable|url'
        ]);

        $data = $request->only('title', 'type', 'link');

        if ($request->type == 'photo' && $request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('galleries', 'public');
        }

        Gallery::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Media berhasil ditambahkan ke galeri.');
    }

    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->type == 'photo' && $gallery->file_path) {
            Storage::disk('public')->delete($gallery->file_path);
        }
        $gallery->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Media galeri berhasil dihapus.');
    }
}
