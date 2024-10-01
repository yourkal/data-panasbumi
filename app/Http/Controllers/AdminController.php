<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan halaman dashboard dengan data
    public function index()
    {
        $dataUmum = DataUmum::all();
        // Ambil data lainnya dengan cara yang sama jika diperlukan

        return view('dashboard', compact('dataUmum'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('data_umum.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'jenis_laporan' => 'required',
            'judul_laporan' => 'required',
            'instansi_pelapor' => 'required',
            'penulis_laporan' => 'required',
            'sumber_data' => 'required',
        ]);

        DataUmum::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan form edit untuk data tertentu
    public function edit(DataUmum $dataUmum)
    {
        return view('data_umum.edit', compact('dataUmum'));
    }

    // Mengupdate data yang sudah ada
    public function update(Request $request, DataUmum $dataUmum)
    {
        $request->validate([
            'jenis_laporan' => 'required',
            'judul_laporan' => 'required',
            'instansi_pelapor' => 'required',
            'penulis_laporan' => 'required',
            'sumber_data' => 'required',
        ]);

        $dataUmum->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Data berhasil diupdate');
    }

    // Menghapus data
    public function destroy(DataUmum $dataUmum)
    {
        $dataUmum->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');
    }
}
