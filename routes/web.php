<?php

use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\HorairesController;
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

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::resource('/', AdminController::class);
});


Route::middleware(['auth', 'role:chauffeur'])->name('chauffeur.')->prefix('chauffeur')->group(function(){
    Route::resource('/', DriversController::class);
    Route::get('/drivers', [DriversController::class, 'index'])->name('Drivers');
    
    // Route::get('/create', [DriversController::class, 'create'])->name('create');

    //  Route::resource('/horaires' , HorairesController::class); 
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
