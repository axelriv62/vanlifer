<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($voyage_id, $user_id)
    {
        return view('avis.create', compact('voyage_id', 'user_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
            'voyage_id' => 'required|integer|exists:voyages,id',
        ]);

        $avis = new Avis();
        $avis->contenu = $request->contenu;
        $avis->user_id = auth()->id();
        $avis->voyage_id = $request->voyage_id;

        $avis->save();

        return redirect()->route('voyages.show', $avis->voyage_id)
            ->with('success', 'Avis created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id) {
        $avis= Avis::find($id);
        return view('avis.show', ['avis' => $avis]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $avis = Avis::find($id);
    return view('avis.edit', ['avis' => $avis]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
