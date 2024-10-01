<?php

namespace App\Http\Controllers;

use App\Models\Tdem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TDEMController extends Controller
{
    public function index()
    {
        $tdems = Tdem::all();
        return view('tdem.index', compact('tdems'));
    }

    public function create()
    {
        return view('tdem.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_tdem' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $fileNameToStore = $request->hasFile('image') ? $request->file('image')->store('tdem_images', 'public') : null;

        Tdem::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_tdem' => $request->sari_tdem,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('tdem.index');
    }

    public function edit(Tdem $tdem)
    {
        return view('tdem.edit', compact('tdem'));
    }

    public function update(Request $request, Tdem $tdem)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_tdem' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $tdem->image);
            $fileNameToStore = $request->file('image')->store('tdem_images', 'public');
        } else {
            $fileNameToStore = $tdem->image;
        }

        $tdem->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_tdem' => $request->sari_tdem,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('tdem.index');
    }

    public function destroy(Tdem $tdem)
    {
        if ($tdem->image) {
            Storage::delete('public/' . $tdem->image);
        }
        $tdem->delete();
        return redirect()->route('tdem.index');
    }
}

