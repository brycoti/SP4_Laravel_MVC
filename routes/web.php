<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;
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
    return "Aquí es el home del proyecto SP4 Laravel";
});

// Rutas para equipos de fútbol
Route::get('/team', [TeamController::class, 'index']);
Route::get('/team/create', [TeamController::class, 'create']);
Route::get('/team/{id}', [TeamController::class, 'show']);
Route::get('/team/{id}/edit', [TeamController::class, 'edit']);
Route::delete('/team/{id}', [TeamController::class, 'destroy']);

// Rutas para partidos de fútbol
Route::get('/match', [MatchController::class, 'index']);
Route::get('/match/create', [MatchController::class, 'create']);
Route::get('/match/{id}', [MatchController::class, 'show']);
Route::get('/match/{id}/edit', [MatchController::class, 'edit']);
Route::delete('/match/{id}', [MatchController::class, 'destroy']);


//////////////////////////////////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
