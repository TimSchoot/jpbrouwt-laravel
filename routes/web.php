<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\KlantController;

Route::get('/', [KlantController::class, 'index']);
Route::post('/klant/store', [KlantController::class, 'store'])->name('klant.store');

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('app');
// });
