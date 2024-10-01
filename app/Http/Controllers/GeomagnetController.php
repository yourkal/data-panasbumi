<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Geomagnet;
use Illuminate\Http\Request;

class GeomagnetController extends Controller
{
    public function index()
    {
        $geomagnet = Geomagnet::all(); // Get all geomagnet records
        return view('geomagnet.index', compact('geomagnet'));
    }

    public function create()
    {
        return view('geomagnet.create'); // Show form to create a new geomagnet record
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required',
            'sari_geomagnet' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $geomagnet = new Geomagnet();
        $geomagnet->informasi = $request->informasi;
        $geomagnet->keterangan = $request->keterangan;
        $geomagnet->sari_geomagnet = $request->sari_geomagnet;
    
        if ($request->hasFile('image')) {
            $geomagnet->image = $request->file('image')->store('images', 'public');
        }
    
        $geomagnet->save();
    
        return redirect()->route('geomagnet.index');
    }
    
    public function edit(Geomagnet $geomagnet)
    {
        return view('geomagnet.edit', compact('geomagnet')); // Show form to edit geomagnet record
    }

    public function update(Request $request, Geomagnet $geomagnet)
    {
        $request->validate([
            'informasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'sari_geomagnet' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // If there's a new image, delete the old one
            if ($geomagnet->image) {
                \Storage::disk('public')->delete($geomagnet->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $geomagnet->update([
            'informasi' => $request->informasi,
            'keterangan' => $request->keterangan,
            'sari_geomagnet' => $request->sari_geomagnet,
            'image' => $imagePath ?? $geomagnet->image, // Update image path if exists or keep the old one
        ]);

        return redirect()->route('geomagnet.index')->with('success', 'Geomagnet updated successfully.');
    }

    public function destroy(Geomagnet $geomagnet)
    {
        // Delete the image file if it exists
        if ($geomagnet->image) {
            \Storage::disk('public')->delete($geomagnet->image);
        }

        $geomagnet->delete(); // Delete geomagnet record

        return redirect()->route('geomagnet.index')->with('success', 'Geomagnet deleted successfully.');
    }
}
