<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function show($id) {
        $user = User::with(['mesVoyages', 'avis.voyage'])->findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function profil() {
        return redirect()->route('users.show', ['id' => auth()->id()]);
    }

}
