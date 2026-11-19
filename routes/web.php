<?php

use App\Http\Controllers\GamerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page: send visitors to your gamers page (they'll be asked to log in first)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('gamers.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Everything inside this group requires login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Your gamers pages (index, create, store, show, edit, update, destroy)
    Route::resource('gamers', GamerController::class);
}); require __DIR__.'/auth.php';
