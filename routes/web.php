<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
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
})->name('landing');

Route::get('/dashboard', [VehicleController::class, 'total'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::post('dashboard', [VehicleController::class, 'store']);

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');
Route::get('/print/{vehicle}', [VehicleController::class, 'createPDF'])->name('print');
// Route::get('/print/{vehicle}/pdf', [VehicleController::class, 'createPDF']);

Route::get('/vehicles', [VehicleController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('vehicles'); 
Route::get('/edit/{vehicle}', [VehicleController::class, 'edit'])->name('edit');
Route::patch('/update/{vehicle}', [VehicleController::class, 'update'])->name('update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/delete/{vehicle}', [VehicleController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
