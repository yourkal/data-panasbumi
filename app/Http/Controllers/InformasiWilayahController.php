<?php

namespace App\Http\Controllers;

use App\Models\InformasiWilayah;
use Illuminate\Http\Request;

class InformasiWilayahController extends Controller
{
    public function index()
    {
        $informasiWilayah = InformasiWilayah::all();
        return view('informasi_wilayah.index', compact('informasiWilayah'));
    }

    public function create()
    {
        return view('informasi_wilayah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_daerah' => 'nullable|string|max:255',
            'nomor_daerah' => 'nullable|string|max:255',
            'pulau' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'posisi_lintang' => 'nullable|numeric',
            'posisi_bujur' => 'nullable|numeric',
            'temperatur_manifestasi' => 'nullable|numeric',
            'geotermometer' => 'nullable|numeric',
            'top_reservoir' => 'nullable|numeric',
            'sumber_daya_spekulatif' => 'nullable|numeric',
            'sumber_daya_hipotetis' => 'nullable|numeric',
            'cadangan_mungkin' => 'nullable|numeric',
            'cadangan_terduga' => 'nullable|numeric',
            'cadangan_terbukti' => 'nullable|numeric',
        ]);

        InformasiWilayah::create($request->all());

        return redirect()->route('informasi_wilayah.index')->with('success', 'Data Informasi Wilayah berhasil ditambahkan.');
    }

    public function edit(InformasiWilayah $informasiWilayah)
    {
        return view('informasi_wilayah.edit', compact('informasiWilayah'));
    }

    public function update(Request $request, InformasiWilayah $informasiWilayah)
    {
        $request->validate([
            'nama_daerah' => 'nullable|string|max:255',
            'nomor_daerah' => 'nullable|string|max:255',
            'pulau' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'posisi_lintang' => 'nullable|numeric',
            'posisi_bujur' => 'nullable|numeric',
            'temperatur_manifestasi' => 'nullable|numeric',
            'geotermometer' => 'nullable|numeric',
            'top_reservoir' => 'nullable|numeric',
            'sumber_daya_spekulatif' => 'nullable|numeric',
            'sumber_daya_hipotetis' => 'nullable|numeric',
            'cadangan_mungkin' => 'nullable|numeric',
            'cadangan_terduga' => 'nullable|numeric',
            'cadangan_terbukti' => 'nullable|numeric',
        ]);

        $informasiWilayah->update($request->all());

        return redirect()->route('informasi_wilayah.index')->with('success', 'Data Informasi Wilayah berhasil diperbarui.');
    }

    public function destroy(InformasiWilayah $informasiWilayah)
    {
        $informasiWilayah->delete();
        return redirect()->route('informasi_wilayah.index')->with('success', 'Data Informasi Wilayah berhasil dihapus.');
    }
}
