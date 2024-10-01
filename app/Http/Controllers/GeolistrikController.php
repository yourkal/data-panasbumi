<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geolistrik;
use Illuminate\Support\Facades\Storage;

class GeolistrikController extends Controller
{
    public function index()
    {
        $geolistrik = Geolistrik::all();
        return view('geolistrik.index', compact('geolistrik'));
    }

    public function create()
    {
        return view('geolistrik.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_geolistrik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            $fileNameToStore = $request->file('image')->store('geolistrik_images', 'public');
        } else {
            $fileNameToStore = null;
        }

        Geolistrik::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_geolistrik' => $request->sari_geolistrik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('geolistrik.index');
    }

    public function edit(Geolistrik $geolistrik)
    {
        return view('geolistrik.edit', compact('geolistrik'));
    }

    public function update(Request $request, Geolistrik $geolistrik)
    {
        $validated = $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_geolistrik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $geolistrik->image);
            $fileNameToStore = $request->file('image')->store('geolistrik_images', 'public');
        } else {
            $fileNameToStore = $geolistrik->image;
        }

        $geolistrik->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_geolistrik' => $request->sari_geolistrik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('geolistrik.index');
    }

    public function destroy(Geolistrik $geolistrik)
    {
        if ($geolistrik->image) {
            Storage::delete('public/' . $geolistrik->image);
        }
        $geolistrik->delete();
        return redirect()->route('geolistrik.index');
    }
}

