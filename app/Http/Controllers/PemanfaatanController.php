<?php

namespace App\Http\Controllers;

use App\Models\Pemanfaatan;
use Illuminate\Http\Request;

class PemanfaatanController extends Controller
{
    public function index()
    {
        $pemanfaatans = Pemanfaatan::all();
        return view('pemanfaatan.index', compact('pemanfaatans'));
    }

    public function create()
    {
        return view('pemanfaatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sari' => 'required',
        ]);

        Pemanfaatan::create($request->all());
        return redirect()->route('pemanfaatan.index')->with('success', 'Data Pemanfaatan berhasil ditambahkan.');
    }

    public function edit(Pemanfaatan $pemanfaatan)
    {
        return view('pemanfaatan.edit', compact('pemanfaatan'));
    }

    public function update(Request $request, Pemanfaatan $pemanfaatan)
    {
        $request->validate([
            'sari' => 'required',
        ]);

        $pemanfaatan->update($request->all());
        return redirect()->route('pemanfaatan.index')->with('success', 'Data Pemanfaatan berhasil diubah.');
    }

    public function destroy(Pemanfaatan $pemanfaatan)
    {
        $pemanfaatan->delete();
        return redirect()->route('pemanfaatan.index')->with('success', 'Data Pemanfaatan berhasil dihapus.');
    }
}
