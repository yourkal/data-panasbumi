<?php

// app/Http/Controllers/GeologiController.php

namespace App\Http\Controllers;

use App\Models\Geologi;
use Illuminate\Http\Request;
use App\Models\InformasiGeologi;
use Illuminate\Support\Facades\Storage;

class InformasiGeologiController extends Controller
{
    public function index()
    {
        $geologis = InformasiGeologi::all(); // Get all geologi records
        return view('geologi.index', compact('geologis'));
    }

    public function create()
    {
        return view('geologi.create'); // Show form to create a new geologi record
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_geologi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Image validation
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        InformasiGeologi::create([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_geologi' => $request->sari_geologi,
            'image' => $imagePath ?? null, // Save image path if exists
        ]);

        return redirect()->route('geologi.index')->with('success', 'Geologi created successfully.');
    }

    public function edit(InformasiGeologi $geologi)
    {
        return view('geologi.edit', compact('geologi')); // Show form to edit geologi record
    }

    public function update(Request $request, InformasiGeologi $geologi)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_geologi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // If there's a new image, delete the old one
            if ($geologi->image) {
                \Storage::disk('public')->delete($geologi->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');

        }

        $geologi->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_geologi' => $request->sari_geologi,
            'image' => $imagePath ?? $geologi->image, // Update image path if exists or keep the old one
        ]);

        return redirect()->route('geologi.index')->with('success', 'Geologi updated successfully.');
    }

    public function destroy(InformasiGeologi $geologi)
    {
        // Delete the image file if it exists
        if ($geologi->image) {
            \Storage::disk('public')->delete($geologi->image);
        }

        $geologi->delete(); // Delete geologi record

        return redirect()->route('geologi.index')->with('success', 'Geologi deleted successfully.');
    }
}



