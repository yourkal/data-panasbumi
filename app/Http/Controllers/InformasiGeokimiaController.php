<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Models\InformasiGeokimia;
use App\Models\Geokimia; // Pastikan Anda telah membuat model Geokimia

class InformasiGeokimiaController extends Controller
{
    public function index()
    {
        $geokimias = InformasiGeokimia::all(); // Ambil semua data geokimia
        return view('geokimia.index', compact('geokimias')); // Tampilkan view dengan data
    }

    public function create()
    {
        return view('geokimia.create'); // Tampilkan form untuk menambah data geokimia
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_geokimia' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $geokimia = new InformasiGeokimia();
        $geokimia->informasi = $request->informasi;
        $geokimia->keterangan = $request->keterangan;
        $geokimia->sari_geokimia = $request->sari_geokimia;

        if ($request->hasFile('image')) {
            $geokimia->image = $request->file('image')->store('images', 'public');
        }

        $geokimia->save();

        return redirect()->route('geokimia.index')->with('success', 'Geokimia berhasil ditambahkan.');
    }

    public function edit(InformasiGeokimia $geokimia)
    {
        return view('geokimia.edit', compact('geokimia')); // Tampilkan form untuk mengedit data geokimia
    }

    public function update(Request $request, InformasiGeokimia $geokimia)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_geokimia' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($geokimia->image) {
                \Storage::disk('public')->delete($geokimia->image);
            }
            $geokimia->image = $request->file('image')->store('images', 'public');
        }

        $geokimia->informasi = $request->informasi;
        $geokimia->keterangan = $request->keterangan;
        $geokimia->sari_geokimia = $request->sari_geokimia;
        $geokimia->save();

        return redirect()->route('geokimia.index')->with('success', 'Geokimia berhasil diperbarui.');
    }

    public function destroy(InformasiGeokimia $geokimia)
    {
        if ($geokimia->image) {
            Storage::disk('public')->delete($geokimia->image);
        }

        $geokimia->delete();

        return redirect()->route('geokimia.index')->with('success', 'Geokimia berhasil dihapus.');
    }
}
