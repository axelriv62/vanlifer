<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\UserController;

// Routes données à l'origine

//Route::get('/', function () {
//    return view('index');
//})->name("accueil");

Route::get('/', [VoyageController::class, 'randomVoyages'])->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('dashboard');
})->name("home") -> middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard") -> middleware('auth');


Route::get('/avis/create/{voyage_id}/{user_id}', [AvisController::class, 'create'])->name('avis.create');
Route::post('/avis', [AvisController::class, 'store'])->name('avis.store');
// Routes ajoutées
Route::resource('voyages', VoyageController::class);

Route::resource('etapes', EtapeController::class);
Route::get('/etapes/{etape}/delete', [EtapeController::class, 'delete'])->name('etapes.delete');

Route::post('voyages/{id}/like', [VoyageController::class, 'like'])->name('voyages.like');
Route::delete('voyages/{id}/like', [VoyageController::class, 'unlike'])->name('voyages.unlike');

Route::get('/profil', function () {
    return redirect()->route('users.show', ['id' => auth()->id()]);
});
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
