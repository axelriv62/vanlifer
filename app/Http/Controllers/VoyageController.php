<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoyageController extends Controller
{

    public function index() {
        $voyages = Voyage::all();
        return view('voyages.index', compact('voyages'));
    }

    public function show($id) {
        $voyage = Voyage::findOrFail($id);
        return view('voyages.show', compact('voyage'));
    }

    public function create() {
        return view('voyages.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'resume' => 'required|string',
            'visuel' => 'required|file|mimes:jpg,png,jpeg',
        ]);

        $voyage = new Voyage();
        $voyage->titre = $validated['titre'];
        $voyage->description = $validated['description'];
        $voyage->resume = $validated['resume'];
        $voyage->user_id = auth()->id();

        if ($request->hasFile('visuel')) {
            $path = $request->file('visuel')->store('images', 'public');
            $voyage->visuel = Storage::url($path);
        }

        $voyage->save();
        return redirect()->route('voyages.show', $voyage->id);
    }

    public function edit($id) {
        $voyage = Voyage::findOrFail($id);
        return view('voyages.edit', compact('voyage'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'resume' => 'required|string',
            'visuel' => 'nullable|file|mimes:jpg,png,jpeg',
        ]);

        $voyage = Voyage::findOrFail($id);
        $voyage->titre = $validated['titre'];
        $voyage->description = $validated['description'];
        $voyage->resume = $validated['resume'];

        if ($request->hasFile('visuel')) {
            $path = $request->file('visuel')->store('images', 'public');
            $voyage->visuel = Storage::url($path);
        }

        $voyage->save();
        return redirect()->route('voyages.show', $voyage->id);
    }

    public function destroy($id) {
        $voyage = Voyage::findOrFail($id);
        $voyage->delete();
        return redirect()->route('voyages.index');
    }

    public function like($id) {
        $voyage = Voyage::findOrFail($id);
        $voyage->likes()->attach(auth()->id());
        return redirect()->route('voyages.show', $voyage->id);
    }

    public function unlike($id) {
        $voyage = Voyage::findOrFail($id);
        $voyage->likes()->detach(auth()->id());
        return redirect()->route('voyages.show', $voyage->id);
    }

}
