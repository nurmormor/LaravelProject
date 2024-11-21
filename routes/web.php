<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Ruta accesible sin autenticación
Route::get('/flights', [FlightController::class, 'index'])->name('flights');

Route::get('test', function(){
    return 'Hola';
});
// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/sales', [SaleController::class, 'index'])->name('sales');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/home', [HomeController::class, 'index']);

    // Rutas de perfil

   Route::post('/profile/{user}', [ProfileController::class, 'updatePhoto'])->name('profile.photo');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
