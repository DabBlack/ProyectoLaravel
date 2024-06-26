<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Ruta Artists
Route::get('/artists', function () {
    return view('artists');
})->middleware(['auth', 'verified'])->name('artists');

// Route::get('/artistCreate', [ArtistController::class, 'create']);
// Route::post('/artistStore', [ArtistController::class, 'store']);

Route::get('/artistIndex', [ArtistController::class, 'index'])->name('artistIndex');
Route::get('/artistCreate', [ArtistController::class, 'create'])->name('artistCreate');
Route::post('/artistStore', [ArtistController::class, 'store'])->name('artistStore');
Route::delete('/artistDestroy/{id}', [ArtistController::class, 'destroy'])->name('artistDestroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
