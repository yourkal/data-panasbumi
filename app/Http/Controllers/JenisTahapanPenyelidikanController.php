<?php

namespace App\Http\Controllers;

use App\Models\JenisTahapanPenyelidikan;
use Illuminate\Http\Request;

class JenisTahapanPenyelidikanController extends Controller
{
    public function index()
    {
        $dataTahapan = JenisTahapanPenyelidikan::all();
        return view('jenis_tahapan.index', compact('dataTahapan'));
    }

    public function create()
    {
        return view('jenis_tahapan.create');
    }

    public function store(Request $request)
    {
        JenisTahapanPenyelidikan::create($request->all());
        return redirect()->route('jenis_tahapan.index');
    }

    public function edit(JenisTahapanPenyelidikan $jenisTahapanPenyelidikan)
    {
        return view('jenis_tahapan.edit', compact('jenisTahapanPenyelidikan'));
    }

    public function update(Request $request, JenisTahapanPenyelidikan $jenisTahapanPenyelidikan)
    {
        $jenisTahapanPenyelidikan->update($request->all());
        return redirect()->route('jenis_tahapan.index');
    }

    public function destroy(JenisTahapanPenyelidikan $jenisTahapanPenyelidikan)
    {
        $jenisTahapanPenyelidikan->delete();
        return redirect()->route('jenis_tahapan.index');
    }
}

