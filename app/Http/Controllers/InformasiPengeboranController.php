<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Models\InformasiPengeboran;

class InformasiPengeboranController extends Controller
{
    public function index()
    {
        // Mengambil semua data Informasi Pengeboran
        $informasiPengeborans = InformasiPengeboran::all();
        return view('informasi_pengeboran.index', compact('informasiPengeborans'));
    }

    public function create()
    {
        // Menampilkan form untuk menambahkan data baru Informasi Pengeboran
        return view('informasi_pengeboran.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'representatif_sumur' => 'required|string',
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Membuat data baru Informasi Pengeboran
        $informasiPengeboran = new InformasiPengeboran();
        $informasiPengeboran->informasi = $request->informasi;
        $informasiPengeboran->keterangan = $request->keterangan;
        $informasiPengeboran->representatif_sumur = $request->representatif_sumur;
        $informasiPengeboran->sari = $request->sari;

        // Mengelola upload file gambar
        if ($request->hasFile('image')) {
            $informasiPengeboran->image = $request->file('image')->store('images', 'public');
        }

        $informasiPengeboran->save();

        return redirect()->route('informasi_pengeboran.index')->with('success', 'Informasi Pengeboran berhasil dibuat.');
    }

    public function edit(InformasiPengeboran $informasiPengeboran)
    {
        // Menampilkan form untuk mengedit data Informasi Pengeboran
        return view('informasi_pengeboran.edit', compact('informasiPengeboran'));
    }

    public function update(Request $request, InformasiPengeboran $informasiPengeboran)
    {
        // Validasi data dari form
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'representatif_sumur' => 'required|string',
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengupdate data Informasi Pengeboran
        $informasiPengeboran->informasi = $request->informasi;
        $informasiPengeboran->keterangan = $request->keterangan;
        $informasiPengeboran->representatif_sumur = $request->representatif_sumur;
        $informasiPengeboran->sari = $request->sari;

        // Mengelola upload gambar baru dan menghapus file lama jika perlu
        if ($request->hasFile('image')) {
            if ($informasiPengeboran->image) {
                \Storage::disk('public')->delete($informasiPengeboran->image);
            }
            $informasiPengeboran->image = $request->file('image')->store('images', 'public');
        }

        $informasiPengeboran->save();

        return redirect()->route('informasi_pengeboran.index')->with('success', 'Informasi Pengeboran berhasil diupdate.');
    }

    public function destroy(InformasiPengeboran $informasiPengeboran)
    {
        // Menghapus file gambar jika ada
        if ($informasiPengeboran->image) {
            \Storage::disk('public')->delete($informasiPengeboran->image);
        }

        $informasiPengeboran->delete(); // Menghapus data

        return redirect()->route('informasi_pengeboran.index')->with('success', 'Informasi Pengeboran berhasil dihapus.');
    }
}
