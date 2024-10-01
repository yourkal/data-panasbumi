<?php

namespace App\Http\Controllers;

use App\Models\InformasiLembarPeta;
use Illuminate\Http\Request;

class InformasiLembarPetaController extends Controller
{
    public function index()
    {
        $dataLembarPeta = InformasiLembarPeta::all();
        return view('informasi_lembarpeta.index', compact('dataLembarPeta'));
    }

    public function create()
    {
        return view('informasi_lembarpeta.create');
    }

    public function store(Request $request)
    {
        InformasiLembarPeta::create($request->all());
        return redirect()->route('informasi_lembarpeta.index');
    }

    public function edit(InformasiLembarPeta $informasiLembarPeta)
    {
        return view('informasi_lembarpeta.edit', compact('informasiLembarPeta'));
    }

    public function update(Request $request, InformasiLembarPeta $informasiLembarPeta)
    {
        $informasiLembarPeta->update($request->all());
        return redirect()->route('informasi_lembarpeta.index');
    }

    public function destroy(InformasiLembarPeta $informasiLembarPeta)
    {
        $informasiLembarPeta->delete();
        return redirect()->route('informasi_lembarpeta.index');
    }
}

