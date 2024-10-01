<?php

namespace App\Http\Controllers;

use App\Models\ProspekPanasBumi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProspekPanasBumiController extends Controller
{
    // Menampilkan semua data prospek panas bumi
    public function index()
    {
        $prospekPanasBumi = ProspekPanasBumi::all();
        return view('prospek_panas_bumi.index', compact('prospekPanasBumi'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('prospek_panas_bumi.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $prospek = new ProspekPanasBumi();
        $prospek->sari = $request->sari;

        if ($request->hasFile('image')) {
            $prospek->image = $request->file('image')->store('images', 'public');
        }

        $prospek->save();

        return redirect()->route('prospek_panas_bumi.index')->with('success', 'Data prospek panas bumi berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data yang ada
    public function edit(ProspekPanasBumi $prospek)
    {
        return view('prospek_panas_bumi.edit', compact('prospek'));
    }

    // Memperbarui data di database
    public function update(Request $request, ProspekPanasBumi $prospek)
    {
        $request->validate([
            'sari' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($prospek->image) {
                Storage::disk('public')->delete($prospek->image);
            }

            // Upload gambar baru
            $prospek->image = $request->file('image')->store('images', 'public');
        }

        $prospek->sari = $request->sari;
        $prospek->save();

        return redirect()->route('prospek_panas_bumi.index')->with('success', 'Data prospek panas bumi berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy(ProspekPanasBumi $prospek)
    {
        // Hapus gambar dari penyimpanan jika ada
        if ($prospek->image) {
            Storage::disk('public')->delete($prospek->image);
        }

        $prospek->delete();

        return redirect()->route('prospek_panas_bumi.index')->with('success', 'Data prospek panas bumi berhasil dihapus.');
    }
}
