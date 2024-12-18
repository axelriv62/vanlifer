<?php

use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapeController;

// Routes données à l'origine

Route::get('/', function () {
    return view('index');
})->name("accueil");

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

// Routes ajoutées
Route::resource('voyages', VoyageController::class);

Route::resource('etapes', EtapeController::class);
Route::get('/etapes/{etape}/delete', [EtapeController::class, 'delete'])->name('etapes.delete');

Route::post('voyages/{id}/like', [VoyageController::class, 'like'])->name('voyages.like');
Route::delete('voyages/{id}/like', [VoyageController::class, 'unlike'])->name('voyages.unlike');

