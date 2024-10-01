<?php

namespace App\Http\Controllers;

use App\Models\Magnetotellurik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MagnetotellurikController extends Controller
{
    public function index()
    {
        $data = Magnetotellurik::all();
        return view('magnetotellurik.index', compact('data'));
    }

    public function create()
    {
        return view('magnetotellurik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_magnetotellurik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $fileNameToStore = $request->hasFile('image') ? $request->file('image')->store('magnetotellurik_images', 'public') : null;

        Magnetotellurik::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_magnetotellurik' => $request->sari_magnetotellurik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('magnetotellurik.index');
    }

    public function edit(Magnetotellurik $magnetotellurik)
    {
        return view('magnetotellurik.edit', compact('magnetotellurik'));
    }

    public function update(Request $request, Magnetotellurik $magnetotellurik)
    {
        $request->validate([
            'informasi' => 'required',
            'keterangan' => 'required',
            'sari_magnetotellurik' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $magnetotellurik->image);
            $fileNameToStore = $request->file('image')->store('magnetotellurik_images', 'public');
        } else {
            $fileNameToStore = $magnetotellurik->image;
        }

        $magnetotellurik->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_magnetotellurik' => $request->sari_magnetotellurik,
            'image' => $fileNameToStore
        ]);

        return redirect()->route('magnetotellurik.index');
    }

    public function destroy(Magnetotellurik $magnetotellurik)
    {
        if ($magnetotellurik->image) {
            Storage::delete('public/' . $magnetotellurik->image);
        }
        $magnetotellurik->delete();
        return redirect()->route('magnetotellurik.index');
    }
}

