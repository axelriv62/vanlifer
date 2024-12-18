<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use Illuminate\Http\Request;

class EtapeController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $etapes = Etape::all();
        return view('etapes.index', compact('etapes'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('etapes.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date',
            'voyage_id' => 'required|exists:voyages,id',
        ]);

        $etape = Etape::create($validatedData);

        return redirect()->route('etapes.index')->with('success', 'Étape créée avec succès.');
    }

// Display the specified resource.
    public function show(Etape $etape)
    {
        return view('etapes.show', compact('etape'));
    }
    // Show the form for editing the specified resource.
    public function edit(Etape $etape)
    {
        return view('etapes.edit', compact('etape'));
    }

// Update the specified resource in storage.
    public function update(Request $request, Etape $etape)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date',
            'voyage_id' => 'required|exists:voyages,id',
        ]);

        $etape->update($validatedData);

        return redirect()->route('etapes.index')->with('success', 'Étape mise à jour avec succès.');
    }

// Remove the specified resource from storage.
    public function destroy(Request $request)
    {
        $etape = Etape::findOrFail($request->etape_id);
        $etape->delete();

        return redirect()->route('etapes.index')->with('success', 'Étape supprimée avec succès.');
    }

    public function delete($id)
    {
        $etape = Etape::findOrFail($id);
        $etape->delete();

        return redirect()->route('etapes.index')->with('success', 'Étape supprimée avec succès.');
    }
}
