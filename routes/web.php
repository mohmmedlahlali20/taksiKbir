<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\horairesController;
use App\Http\Controllers\DriverTaxiController;
use App\Http\Controllers\ReservationnController;

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

Route::middleware(['auth', 'role:Chaufeur'])->group(function () {
Route::resource('/Chaufeur',DriverTaxiController::class);
Route::resource('/Horaire',horairesController::class);
Route::post('/Horaire', [horairesController::class , 'Accepter'])->name('accept');

});
// Route::get('/Chaufeur', function () {
//     return view('Chaufeur.index');
// })->middleware(['auth', 'role:Chaufeur'])->name('Chaufeur.index'); 

Route::middleware(['auth', 'role:passager'])->group(function () {
    Route::resource('/passager',horairesController::class);
    // Route::resource('/Horaire',horairesController::class);
    });
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::('/admin',);
//     // Route::resource('/Horaire',horairesController::class);
//     });
Route::resource('/admin', AdminController::class)->middleware(['auth', 'role:Admin']); 



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
