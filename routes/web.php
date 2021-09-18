<?php

use App\Http\Controllers\NominaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [NominaController::class, 'index'])->name('nomina.lista');

Route::get('nomina/crear', [NominaController::class, 'create'])->name('nomina.crear');

Route::post('nomina', [NominaController::class, 'store'])->name('nomina.guardar');

Route::get('nomina/ver/{empleado}', [NominaController::class, 'show'])->name('nomina.ver');

Route::get('nomina/{empleado}/editar', [NominaController::class, 'edit'])->name('nomina.editar');

Route::put('nomina/{empleado}/update', [NominaController::class, 'update'])->name('nomina.actualizar');

Route::put('nomina/{empleado}', [NominaController::class, 'state'])->name('nomina.estado');

Route::delete('nomina/{empleado}', [NominaController::class, 'destroy'])->name('nomina.eliminar');
