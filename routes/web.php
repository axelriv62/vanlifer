<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MyController::class, "index"])->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('dashboard');
})->name("home") -> middleware('auth');

Route::get("/voyages/{id}", [\App\Http\Controllers\MyController::class, "voyage"])->name("voyage");
Route::get("/etapes/{id}", [\App\Http\Controllers\MyController::class, "etape"])->name("voyage");
Route::get("/users/{id}", [\App\Http\Controllers\MyController::class, "user"])->name("user");
Route::post("likes/{id}", [\App\Http\Controllers\MyController::class, 'likes'])->name('likes')->middleware('auth');
