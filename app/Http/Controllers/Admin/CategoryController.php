<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        // Otomatis buat kategori jika kosong (Permintaan User)
        if (Category::count() == 0) {
            $initialCategories = [
                ['name' => 'Operasi Kepolisian', 'slug' => 'operasi-kepolisian'],
                ['name' => 'Edukasi & Sosialisasi', 'slug' => 'edukasi-sosialisasi'],
                ['name' => 'Pelayanan SIM', 'slug' => 'pelayanan-sim'],
            ];
            foreach ($initialCategories as $cat) {
                Category::create($cat);
            }
        }

        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $kategori = Category::findOrFail($id);
        return view('admin.categories.edit', compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $kategori = Category::findOrFail($id);
        
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $kategori->id,
        ]);

        $kategori->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $kategori = Category::findOrFail($id);
        
        // Cek apakah ada berita yang menggunakan kategori ini
        if ($kategori->posts()->count() > 0) {
            return redirect()->back()->with('error', 'Kategori tidak bisa dihapus karena masih digunakan oleh berita.');
        }

        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
