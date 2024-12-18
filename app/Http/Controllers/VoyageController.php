<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{

    public function index() {
        $voyages = Voyage::all();
        return view('voyages.index', compact('voyages'));
    }

    public function show($id) {
        $voyage = Voyage::findorFail($id);
        return view('voyages.show', compact('voyage'));
    }

    public function create() {
        return view('voyages.create');
    }

    public function store(Request $request) {
        $voyage = new Voyage();
        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->resume = $request->resume;
        $voyage->continent = $request->continent;
        $voyage->user_id = $request->user_id;
        $voyage->visuel = $request->visuel;
        $voyage->save();
        return redirect()->route('voyages.index');
    }

    public function edit($id) {
        $voyage = Voyage::findorFail($id);
        return view('voyages.edit', compact('voyage'));
    }

}
