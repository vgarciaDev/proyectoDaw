<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NuestroTrabajoController;
use App\Http\Controllers\TalentoController;
use App\Http\Controllers\templateERPController;
use App\Http\Controllers\Vacacionescontroller;


use App\Http\Controllers\accesoController;
use App\Http\Controllers\FichajeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\NominasController;
use App\Http\Controllers\templateERPRRHHController;
use App\Http\Controllers\VacacionesRRHHController;
use App\Http\Controllers\NuevoEmpleadoController;



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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

//Ruta de ejemplo para poder meter en la url variables, supongamos el numero de un trabajadro que tenga 6 cifras
// Route::get('/login/{numeroId?}', function($numeroId = null){
//     return "Bienvenido Usuario con ID: $numeroId";
// });

Route::get('/inicio', InicioController::class);
Route::get('/nuestroTrabajo', NuestroTrabajoController::class);
Route::get('/talento', [TalentoController::class, 'index']);


Route::post('/talento', [TalentoController::class, 'setCv']);
Route::get('/acceso', [templateERPController::class, 'index']);


Route::post('/talento', [TalentoController::class, 'setCv'])->name("talento");
Route::get('/acceso', [templateERPController::class, 'index']);


Route::get('/contacto', [ContactoController::class, 'index']);

Route::post('/contacto', [ContactoController::class, 'sendEmailFn']);
Route::get('/fichaje', [FichajeController::class, 'index']);
Route::post('/fichaje', [FichajeController::class, 'timekeeping']);

Route::get('/cursos', [cursoController::class, 'index']);
Route::get('/cursos/{id}', [cursoController::class, 'curso'])->name("curso");
Route::get('/cursos/{id}/desapuntarse', [cursoController::class, 'desapuntarse'])->name("desapuntarse");
Route::post('/cursos/{id}', [cursoController::class, 'apuntarse'])->name("apuntarse");


Route::get('/vacaciones', [Vacacionescontroller::class, 'index']);
Route::post('/vacaciones', [Vacacionescontroller::class, 'enviarDatos'])->name('enviarDatos.ajax');

Route::get('/acceso', [AccesoController::class, 'index']);
Route::get('/nominas', [NominasController::class, 'index']);
Route::get('/RRHH', [templateERPRRHHController::class, 'index']);
Route::get('/RRHH/vacaciones', [VacacionesRRHHController::class, 'index']);
Route::get('RRHH/nuevoEmpleado', [NuevoEmpleadoController::class, 'index']);
Route::post('/aceptarVacaciones', 'VacacionesController@aceptarVacaciones')->name('aceptarVacaciones');


