<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Models\AnomaliPanasDangkal;

class AnomaliPanasDangkalController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari model Anomali Panas Dangkal
        $anomaliPanasDangkals = AnomaliPanasDangkal::all();
        return view('anomali_panas_dangkal.index', compact('anomaliPanasDangkals'));
    }

    public function create()
    {
        // Menampilkan form untuk menambahkan data baru Anomali Panas Dangkal
        return view('anomali_panas_dangkal.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_anomali_panas_dangkal' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Membuat data baru Anomali Panas Dangkal
        $anomaliPanasDangkal = new AnomaliPanasDangkal();
        $anomaliPanasDangkal->informasi = $request->informasi;
        $anomaliPanasDangkal->keterangan = $request->keterangan;
        $anomaliPanasDangkal->sari_anomali_panas_dangkal = $request->sari_anomali_panas_dangkal;

        // Mengelola upload file gambar
        if ($request->hasFile('image')) {
            $anomaliPanasDangkal->image = $request->file('image')->store('images', 'public');
        }

        $anomaliPanasDangkal->save();

        return redirect()->route('anomali_panas_dangkal.index')->with('success', 'Anomali Panas Dangkal berhasil dibuat.');
    }

    public function edit(AnomaliPanasDangkal $anomaliPanasDangkal)
    {
        // Menampilkan form untuk mengedit data Anomali Panas Dangkal
        return view('anomali_panas_dangkal.edit', compact('anomaliPanasDangkal'));
    }

    public function update(Request $request, AnomaliPanasDangkal $anomaliPanasDangkal)
    {
        // Validasi data dari form
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_anomali_panas_dangkal' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengupdate data Anomali Panas Dangkal
        $anomaliPanasDangkal->informasi = $request->informasi;
        $anomaliPanasDangkal->keterangan = $request->keterangan;
        $anomaliPanasDangkal->sari_anomali_panas_dangkal = $request->sari_anomali_panas_dangkal;

        // Mengelola upload gambar baru dan menghapus file lama jika perlu
        if ($request->hasFile('image')) {
            if ($anomaliPanasDangkal->image) {
                \Storage::disk('public')->delete($anomaliPanasDangkal->image);
            }
            $anomaliPanasDangkal->image = $request->file('image')->store('images', 'public');
        }

        $anomaliPanasDangkal->save();

        return redirect()->route('anomali_panas_dangkal.index')->with('success', 'Anomali Panas Dangkal berhasil diupdate.');
    }

    public function destroy(AnomaliPanasDangkal $anomaliPanasDangkal)
    {
        // Menghapus file gambar jika ada
        if ($anomaliPanasDangkal->image) {
            \Storage::disk('public')->delete($anomaliPanasDangkal->image);
        }

        $anomaliPanasDangkal->delete(); // Menghapus data

        return redirect()->route('anomali_panas_dangkal.index')->with('success', 'Anomali Panas Dangkal berhasil dihapus.');
    }
}
