<?php

namespace App\Http\Controllers;

use App\Models\SistemPanasBumi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SistemPanasBumiController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel Sistem Panas Bumi
        $sistemPanasBumi = SistemPanasBumi::all();
        return view('sistem_panas_bumi.index', compact('sistemPanasBumi'));
    }

    public function create()
    {
        // Menampilkan form untuk menambahkan data baru
        return view('sistem_panas_bumi.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'batuan_reservoir' => 'required|string|max:255',
            'batuan_penudung' => 'required|string|max:255',
            'sumber_panas' => 'required|string|max:255',
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Membuat objek baru untuk Sistem Panas Bumi
        $sistemPanasBumi = new SistemPanasBumi();
        $sistemPanasBumi->batuan_reservoir = $request->batuan_reservoir;
        $sistemPanasBumi->batuan_penudung = $request->batuan_penudung;
        $sistemPanasBumi->sumber_panas = $request->sumber_panas;
        $sistemPanasBumi->sari = $request->sari;

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $sistemPanasBumi->image = $request->file('image')->store('images', 'public');
        }

        $sistemPanasBumi->save();

        return redirect()->route('sistem_panas_bumi.index')->with('success', 'Data Sistem Panas Bumi berhasil ditambahkan.');
    }

    public function edit(SistemPanasBumi $sistemPanasBumi)
    {
        // Menampilkan form edit
        return view('sistem_panas_bumi.edit', compact('sistemPanasBumi'));
    }

    public function update(Request $request, SistemPanasBumi $sistemPanasBumi)
    {
        // Validasi input
        $request->validate([
            'batuan_reservoir' => 'required|string|max:255',
            'batuan_penudung' => 'required|string|max:255',
            'sumber_panas' => 'required|string|max:255',
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update data
        $sistemPanasBumi->batuan_reservoir = $request->batuan_reservoir;
        $sistemPanasBumi->batuan_penudung = $request->batuan_penudung;
        $sistemPanasBumi->sumber_panas = $request->sumber_panas;
        $sistemPanasBumi->sari = $request->sari;

        // Jika ada file gambar baru, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            if ($sistemPanasBumi->image) {
                Storage::disk('public')->delete($sistemPanasBumi->image);
            }
            $sistemPanasBumi->image = $request->file('image')->store('images', 'public');
        }

        $sistemPanasBumi->save();

        return redirect()->route('sistem_panas_bumi.index')->with('success', 'Data Sistem Panas Bumi berhasil diperbarui.');
    }

    public function destroy(SistemPanasBumi $sistemPanasBumi)
    {
        // Hapus gambar dari storage jika ada
        if ($sistemPanasBumi->image) {
            Storage::disk('public')->delete($sistemPanasBumi->image);
        }

        // Hapus data dari database
        $sistemPanasBumi->delete();

        return redirect()->route('sistem_panas_bumi.index')->with('success', 'Data Sistem Panas Bumi berhasil dihapus.');
    }
}

