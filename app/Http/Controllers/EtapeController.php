<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Enums\FormatMedia;


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

    public function store(Request $request) {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'resume' => 'required|string',
            'description' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date',
            'voyage_id' => 'required|exists:voyages,id',
            'medias.*' => 'nullable|file|mimes:jpg,png,jpeg,mp4,mov,avi',
        ]);

        $etape = Etape::create($validatedData);

        if ($request->hasFile('medias')) {
            foreach ($request->file('medias') as $media) {
                $path = $media->store('media', 'public');
                $format = in_array($media->getClientOriginalExtension(), ['mp4', 'mov', 'avi']) ? FormatMedia::VIDEO : FormatMedia::IMAGE;
                $etape->medias()->create([
                    'titre' => pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME),
                    'url' => Storage::url($path),
                    'format' => $format,
                ]);
            }
        }

        return redirect()->route('etapes.index')->with('success', 'Étape créée avec succès.');
    }

// Display the specified resource.
    public function show(Etape $etape)
    {
        $etape->load('medias');

        $previousEtape = Etape::where('voyage_id', $etape->voyage_id)
            ->where('id', '<', $etape->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextEtape = Etape::where('voyage_id', $etape->voyage_id)
            ->where('id', '>', $etape->id)
            ->orderBy('id', 'asc')
            ->first();

        return view('etapes.show', compact('etape', 'previousEtape', 'nextEtape'));
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
            'medias.*' => 'nullable|file|mimes:jpg,png,jpeg,mp4,mov,avi',
            'remove_medias' => 'nullable|array',
            'remove_medias.*' => 'exists:media,id',
        ]);

        $etape->update($validatedData);

        // Supprimer un média
        if ($request->has('remove_medias')) {
            foreach ($request->remove_medias as $mediaId) {
                $media = $etape->medias()->find($mediaId);
                if ($media) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $media->url));
                    $media->delete();
                }
            }
        }

        // Ajouter un média
        if ($request->hasFile('medias')) {
            foreach ($request->file('medias') as $media) {
                $path = $media->store('media', 'public');
                $format = in_array($media->getClientOriginalExtension(), ['mp4', 'mov', 'avi']) ? FormatMedia::VIDEO : FormatMedia::IMAGE;
                $etape->medias()->create([
                    'titre' => pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME),
                    'url' => Storage::url($path),
                    'format' => $format,
                ]);
            }
        }

        return redirect()->route('etapes.show', $etape)->with('success', 'Étape modifiée avec succès.');
    }

// Remove the specified resource from storage.
    public function destroy(Etape $etape)
    {
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
