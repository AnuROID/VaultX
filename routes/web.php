<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/images',[ImageController::class,'index'])->name('images.index');
    Route::get('/upload',[ImageController::class,'create'])->name('images.create');
    Route::post('/upload',[ImageController::class, 'store'])->name('images.store');
    Route::delete('/images/{id}',[ImageController::class, 'destroy'])->name('images.destroy');
    Route::get('/images/download/{id}',[ImageController::class,'download'])->name('images.download');

});

require __DIR__.'/auth.php';
