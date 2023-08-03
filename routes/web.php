<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\ReservationController;

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
    User::create(['name' => 'admin', 'email' => 'e@e.ma', 'password' => Hash::make('admin')]);

});

Route::post('/Reservations',[ReservationController::class,'store']);
Route::get('/Reservations',[ReservationController::class,'index']);
Route::get('/Reservations/Nouveau',[ReservationController::class,'create']);
Route::post('/Reservations/{id}',[ReservationController::class,'destroy']);


Route::get('/Produits', [ProduitsController::class, 'index']);
Route::post('/AjouterProduit', [ProduitsController::class, 'store'])->name('AjouterProduit');
Route::post('/ModifierProduit/{client}', [ProduitsController::class, 'edite'])->name('ModifierProduit');
Route::post('/DeleteProduit/{client}', [ProduitsController::class, 'destroy'])->name('DeleteProduit');

Route::get('/Clients', [ClientController::class, 'index']);
Route::post('/AjouterClient', [ClientController::class, 'store'])->name('AjouterClient');
Route::post('/ModifierClient/{client}', [ClientController::class, 'Edite'])->name('ModifierClient');
Route::post('/DeleteClient/{client}', [ClientController::class, 'destroy'])->name('DeleteClient');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
