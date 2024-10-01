<?php

namespace App\Http\Controllers;

use App\Models\Penyelidikan;
use Illuminate\Http\Request;

class PenyelidikanController extends Controller
{
    public function index()
    {
        $penyelidikan = Penyelidikan::all();
        return view('penyelidikan.index', compact('penyelidikan'));
    }

    public function create()
    {
        return view('penyelidikan.create');
    }

    public function store(Request $request)
    {
        Penyelidikan::create($request->all());
        return redirect()->route('penyelidikan.index');
    }

    public function edit(Penyelidikan $penyelidikan)
    {
        return view('penyelidikan.edit', compact('penyelidikan'));
    }

    public function update(Request $request, Penyelidikan $penyelidikan)
    {
        $penyelidikan->update($request->all());
        return redirect()->route('penyelidikan.index');
    }

    public function destroy(Penyelidikan $penyelidikan)
    {
        $penyelidikan->delete();
        return redirect()->route('penyelidikan.index');
    }
}
