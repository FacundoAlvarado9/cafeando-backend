<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariedadController;
use App\Http\Controllers\TostaduriaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\OrigenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('variedades.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::resource('variedades', VariedadController::class);
  Route::resource('tostadurias', TostaduriaController::class);
  Route::resource('tostadurias.sucursales', SucursalController::class)->except(['index', 'show'])->shallow();
  Route::resource('ciudades', CiudadController::class)->except(['show']);
  Route::resource('origenes', OrigenController::class);
});

require __DIR__.'/auth.php';
