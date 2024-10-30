<?php

use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('hotels', function () {
    return view('/hotels/index');
});

Route::get('usuarios', function () {
    return view('user');
});

Route::get('/CRUD/crear', [HotelsController::class, 'crear'])->name('CRUD.crear');

Route::post('/CRUD/store', [HotelsController::class, 'store'])->name('CRUD.store');

Route::get('/CRUD/consultar', [HotelsController::class , 'consultar'])->name('CRUD.consultar');

Route::put('/CRUD/{hotel}', [HotelsController::class , 'update'])->name('CRUD.update');

Route::get('/CRUD/eliminar', [HotelsController::class , 'eliminar'])->name('CRUD.eliminar');

Route::delete('/CRUD/{hotel}', [HotelsController::class, 'destroy'])->name('CRUD.destroy');

Route::get('reservation/index',[ReservationController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});


