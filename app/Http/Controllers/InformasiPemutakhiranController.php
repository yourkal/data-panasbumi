<?php

namespace App\Http\Controllers;

use App\Models\InformasiPemutakhiran;
use Illuminate\Http\Request;

class InformasiPemutakhiranController extends Controller
{
    public function index()
    {
        $informasiPemutakhirans = InformasiPemutakhiran::all();
        return view('informasi_pemutakhiran.index', compact('informasiPemutakhirans'));
    }

    public function create()
    {
        return view('informasi_pemutakhiran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'pengisi' => 'required',
            'tanggal' => 'required',
            'verifikator' => 'required',
        ]);

        InformasiPemutakhiran::create($request->all());
        return redirect()->route('informasi_pemutakhiran.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(InformasiPemutakhiran $informasiPemutakhiran)
    {
        return view('informasi_pemutakhiran.edit', compact('informasiPemutakhiran'));
    }

    public function update(Request $request, InformasiPemutakhiran $informasiPemutakhiran)
    {
        $request->validate([
            'status' => 'required',
            'pengisi' => 'required',
            'tanggal' => 'required',
            'verifikator' => 'required',
        ]);

        $informasiPemutakhiran->update($request->all());
        return redirect()->route('informasi_pemutakhiran.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(InformasiPemutakhiran $informasiPemutakhiran)
    {
        $informasiPemutakhiran->delete();
        return redirect()->route('informasi_pemutakhiran.index')->with('success', 'Data berhasil dihapus.');
    }
}

