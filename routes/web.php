<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NuestroTrabajoController;
use App\Http\Controllers\TalentoController;
use App\Http\Controllers\templateERPController;
use App\Http\Controllers\Vacacionescontroller;

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

Route::get('/', InicioController::class);
Route::get('/login', LoginController::class);

//Ruta de ejemplo para poder meter en la url variables, supongamos el numero de un trabajadro que tenga 6 cifras
// Route::get('/login/{numeroId?}', function($numeroId = null){
//     return "Bienvenido Usuario con ID: $numeroId";
// });

Route::get('/inicio', InicioController::class);
Route::get('/nuestroTrabajo', NuestroTrabajoController::class);
Route::get('/talento', [TalentoController::class, 'index']);
Route::post('/talento', [TalentoController::class, 'setCv']);
Route::get('/contacto', [ContactoController::class, 'index']);
Route::get('/templateERP', templateERPController::class);
Route::get('/vacaciones', [Vacacionescontroller::class, 'index']);
Route::post('/vacaciones', [Vacacionescontroller::class, 'enviarDatos'])->name('enviarDatos.ajax');
