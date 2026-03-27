<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Officer;
use Illuminate\Support\Facades\Storage;

class OfficerController extends Controller
{
    public function index()
    {
        $officers = Officer::orderBy('sort_order', 'asc')->get();
        return view('admin.officers.index', compact('officers'));
    }

    public function create()
    {
        return view('admin.officers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'sort_order' => 'required|numeric'
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('officers', 'public');
        }

        Officer::create($data);

        return redirect()->route('admin.pejabat.index')->with('success', 'Profil Pimpinan berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $officer = Officer::findOrFail($id);
        return view('admin.officers.edit', compact('officer'));
    }

    public function update(Request $request, string $id)
    {
        $officer = Officer::findOrFail($id);
        
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'sort_order' => 'required|numeric'
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($officer->image) {
                Storage::disk('public')->delete($officer->image);
            }
            $data['image'] = $request->file('image')->store('officers', 'public');
        }

        $officer->update($data);

        return redirect()->route('admin.pejabat.index')->with('success', 'Profil Pimpinan berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $officer = Officer::findOrFail($id);
        if ($officer->image) {
            Storage::disk('public')->delete($officer->image);
        }
        $officer->delete();

        return redirect()->route('admin.pejabat.index')->with('success', 'Profil Pimpinan berhasil dihapus');
    }
}
