<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapeController;

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



Route::resource('etapes', EtapeController::class);
Route::get('/etapes/{etape}/delete', [EtapeController::class, 'delete'])->name('etapes.delete');
Route::get('voyages/{voyage}/etapes', [EtapeController::class, 'show'])->name('etapes.show');
