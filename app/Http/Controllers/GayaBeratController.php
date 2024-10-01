<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GayaBerat;
use Illuminate\Support\Facades\Storage;

class GayaBeratController extends Controller
{
    public function index()
    {
        $gayaBerat = GayaBerat::all();
        return view('gaya_berat.index', compact('gayaBerat'));
    }

    public function create()
    {
        return view('gaya_berat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_gaya_berat' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            $fileNameToStore = $request->file('image')->store('gaya_berat_images', 'public');
        } else {
            $fileNameToStore = null;
        }

        GayaBerat::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_gaya_berat' => $request->sari_gaya_berat,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('gaya_berat.index');
    }

    public function edit(GayaBerat $gayaBerat)
    {
        return view('gaya_berat.edit', compact('gayaBerat'));
    }

    public function update(Request $request, GayaBerat $gayaBerat)
    {
        $validated = $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_gaya_berat' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $gayaBerat->image);
            $fileNameToStore = $request->file('image')->store('gaya_berat_images', 'public');
        } else {
            $fileNameToStore = $gayaBerat->image;
        }

        $gayaBerat->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_gaya_berat' => $request->sari_gaya_berat,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('gaya_berat.index');
    }

    public function destroy(GayaBerat $gayaBerat)
    {
        if ($gayaBerat->image) {
            Storage::delete('public/' . $gayaBerat->image);
        }
        $gayaBerat->delete();
        return redirect()->route('gaya_berat.index');
    }
}

