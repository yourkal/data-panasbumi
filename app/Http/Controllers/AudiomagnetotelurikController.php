<?php

namespace App\Http\Controllers;

use App\Models\Audiomagnetotelurik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AudiomagnetotelurikController extends Controller
{
    public function index()
    {
        $data = Audiomagnetotelurik::all();
        return view('audiomagnetotelurik.index', compact('data'));
    }

    public function create()
    {
        return view('audiomagnetotelurik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_audiomagnetotelurik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $fileNameToStore = $request->hasFile('image') ? $request->file('image')->store('audiomagnetotelurik_images', 'public') : null;

        Audiomagnetotelurik::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_audiomagnetotelurik' => $request->sari_audiomagnetotelurik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('audiomagnetotelurik.index');
    }

    public function edit(Audiomagnetotelurik $audiomagnetotelurik)
    {
        return view('audiomagnetotelurik.edit', compact('audiomagnetotelurik'));
    }

    public function update(Request $request, Audiomagnetotelurik $audiomagnetotelurik)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_audiomagnetotelurik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $audiomagnetotelurik->image);
            $fileNameToStore = $request->file('image')->store('audiomagnetotelurik_images', 'public');
        } else {
            $fileNameToStore = $audiomagnetotelurik->image;
        }

        $audiomagnetotelurik->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_audiomagnetotelurik' => $request->sari_audiomagnetotelurik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('audiomagnetotelurik.index');
    }

    public function destroy(Audiomagnetotelurik $audiomagnetotelurik)
    {
        if ($audiomagnetotelurik->image) {
            Storage::delete('public/' . $audiomagnetotelurik->image);
        }
        $audiomagnetotelurik->delete();
        return redirect()->route('audiomagnetotelurik.index');
    }
}

