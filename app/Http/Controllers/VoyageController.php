<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoyageController extends Controller
{
    use AuthorizesRequests;

    public function index() {
        $voyages = Voyage::where('en_ligne', true)
            ->orWhere('user_id', auth()->id())
            ->get();

        return view('voyages.index', compact('voyages'));
    }

    public function show($id) {
        $voyage = Voyage::with(['etapes.medias', 'likes', 'avis'])->findOrFail($id);
        $etapes = $voyage->etapes->take(4);

        if ($etapes->count() < 4) {
            $additionalEtapes = $voyage->etapes->skip(4)->take(4 - $etapes->count());
            $etapes = $etapes->merge($additionalEtapes);
        }

        return view('voyages.show', compact('voyage', 'etapes'));
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
        $voyage->en_ligne = false;
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

    public function randomVoyages() {
        $voyages = Voyage::inRandomOrder()->take(3)->get();
        return view('index', compact('voyages'));
    }

    public function publish($id) {
        $voyage = Voyage::findOrFail($id);

        if ($voyage->user_id != auth()->id()) {
            abort(403, 'Action non autorisée');
        }

        $voyage->en_ligne = true;
        $voyage->save();

        return redirect()->route('voyages.show', $voyage->id);
    }

}
