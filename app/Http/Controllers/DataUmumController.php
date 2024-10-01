<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class DataUmumController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $dataUmum = DataUmum::all();
        return view('data_umum.index', compact('dataUmum'));
    }

    // Menampilkan form untuk menambah data baru
    public function create()
    {
        return view('data_umum.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis_laporan' => 'required|string|max:255',
            'judul_laporan' => 'required|string|max:255',
            'instansi_pelapor' => 'required|string|max:255',
            'penulis_laporan' => 'required|string|max:255',
            'sumber_data' => 'required|string|max:255',
        ]);
    
        DataUmum::create($request->all());
    
        return redirect()->route('data_umum.index')->with('success', 'Data Umum berhasil ditambahkan.');
    }
    

    // Menampilkan form untuk mengedit data
    public function edit(DataUmum $dataUmum)
    {
        return view('data_umum.edit', compact('dataUmum'));
    }

    // Mengupdate data
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
        return redirect()->route('data_umum.index')->with('success', 'Data berhasil diupdate.');
    }

    // Menghapus data
    public function destroy(DataUmum $dataUmum)
    {
        $dataUmum->delete();
        return redirect()->route('data_umum.index')->with('success', 'Data berhasil dihapus.');
    }
}
