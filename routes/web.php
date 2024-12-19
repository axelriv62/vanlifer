<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\UserController;

Route::get('/', [VoyageController::class, 'randomVoyages'])->name('accueil');
Route::get('/home', [VoyageController::class, 'randomVoyages'])->name('accueil')->middleware('auth');

Route::get('/avis/create/{voyage_id}/{user_id}', [AvisController::class, 'create'])->name('avis.create')->middleware('auth');
Route::post('/avis', [AvisController::class, 'store'])->name('avis.store')->middleware('auth');
// Routes ajoutées

Route::resource('voyages', VoyageController::class);
Route::get('/voyages/{voyage}/delete', [VoyageController::class, 'delete'])->name('voyages.delete')->middleware('auth');
Route::get('/voyages/create', [VoyageController::class, 'create'])->name('voyages.create')->middleware('auth');
Route::get('/voyages/{voyage}/edit', [VoyageController::class, 'edit'])->name('voyages.edit')->middleware('auth');

Route::resource('etapes', EtapeController::class);
Route::get('/etapes/{etape}/delete', [EtapeController::class, 'delete'])->name('etapes.delete')->middleware('auth');
Route::get('/etapes/create/{voyage_id}', [EtapeController::class, 'create'])->name('etapes.create')->middleware('auth');
Route::get('/etapes/{etape}/edit', [EtapeController::class, 'edit'])->name('etapes.edit')->middleware('auth');

Route::post('voyages/{id}/like', [VoyageController::class, 'like'])->name('voyages.like');
Route::delete('voyages/{id}/like', [VoyageController::class, 'unlike'])->name('voyages.unlike');
Route::post('/voyages/{id}/publish', [VoyageController::class, 'publish'])->name('voyages.publish');

Route::get('/profil', function () {
    return redirect()->route('users.show', ['id' => auth()->id()]);
});
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')->middleware('auth');
Route::get('/users-actifs', [UserController::class, 'usersWithActiveVoyages'])->name('users.actifs')->middleware('auth');
