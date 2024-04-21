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
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CursosRRHHController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\FichajeRRHHController;



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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Ruta de ejemplo para poder meter en la url variables, supongamos el numero de un trabajadro que tenga 6 cifras
// Route::get('/login/{numeroId?}', function($numeroId = null){
//     return "Bienvenido Usuario con ID: $numeroId";
// });

Route::get('/inicio', InicioController::class)->name('inicio');
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
Route::get('/RRHH', [templateERPRRHHController::class, 'index'])->name('RRHH');
Route::get('/RRHH/vacaciones', [VacacionesRRHHController::class, 'index']);

Route::post('/aceptarVacaciones', 'App\Http\Controllers\VacacionesRRHHController@aceptarVacaciones')->name('aceptarVacaciones');
Route::post('/rechazarVacaciones', 'App\Http\Controllers\VacacionesRRHHController@rechazarVacaciones')->name('rechazarVacaciones');

Route::get('/RRHH/empleados', [EmpleadoController::class, 'index'])->name('empleados');
Route::get('/RRHH/empleados/añadir', [EmpleadoController::class, 'formularioAñadir']);
Route::post('/RRHH/empleados/añadir', [EmpleadoController::class, 'añadir'])->name('añadirEmpleado');
Route::get('/RRHH/empleados/editar/{id}', [EmpleadoController::class, 'editar'])->name('editarEmpleado');
Route::post('/RRHH/empleados/editar/{id}', [EmpleadoController::class, 'editarEmpleado'])->name('editarEmpleadoController');
Route::get('/RRHH/empleados/eliminar', [EmpleadoController::class, 'eliminar'])->name('eliminarEmpleado');

Route::get('/RRHH/cursos', [CursosRRHHController::class, 'index'])->name('cursosRRHH');
Route::get('/RRHH/cursos/añadir', [CursosRRHHController::class, 'añadir'])->name('añadirCursoRRHH');
Route::post('/RRHH/cursos/añadir', [CursosRRHHController::class, 'añadirCurso'])->name('añadirCursoRRHHPost');
Route::get('/RRHH/cursos/{id}', [CursosRRHHController::class, 'curso'])->name('cursoRRHH');
Route::get('/RRHH/cursos/editar/{id}', [CursosRRHHController::class, 'editar'])->name('editarCursoRRHH');
Route::post('/RRHH/cursos/editar', [CursosRRHHController::class, 'editarCurso'])->name('editarCursoRRHHPost');
Route::get('/RRHH/cursos/borrar/{id}', [CursosRRHHController::class, 'borrar'])->name('borrarCursoRRHH');


Route::get('/RRHH/candidatos', [CandidatosController::class, 'index']);

Route::get('/RRHH/candidatos/ofertas', [CandidatosController::class, 'ofertas'])->name('verOfertas');
Route::get('/RRHH/candidatos/ofertas/añadir', [CandidatosController::class, 'añadir'])->name('añadirOferta');
Route::post('/RRHH/candidatos/ofertas/añadir', [CandidatosController::class, 'añadirOferta'])->name('añadirOfertaPost');
Route::get('/RRHH/candidatos/ofertas/eliminar', [CandidatosController::class, 'eliminar']);
Route::get('/RRHH/candidatos/candidatos', [CandidatosController::class, 'indexCandidatos'])->name('buscarCandidatos');
Route::get('/RRHH/candidatos/candidatos/buscar', [CandidatosController::class, 'buscarCandidatos'])->name('buscarCandidatosPost');

Route::get('/RRHH/candidatos/ofertas/descargar/{idPDF}', [CandidatosController::class, 'descargarPDF'])->name('descargarPDF');
Route::get('/RRHH/candidatos/ofertas/{id}', [CandidatosController::class, 'oferta'])->name('verOferta');
Route::get('/RRHH/candidatos/ofertas/editar/{id}', [CandidatosController::class, 'editar'])->name('editarOferta');
Route::post('/RRHH/candidatos/ofertas/editar', [CandidatosController::class, 'editarOferta'])->name('editarOfertaPost');


Route::get('/RRHH/fichaje', [FichajeRRHHController::class, 'index'])->name('verFichajes');
Route::get('/RRHH/fichaje/detalle/{id}/{year}/{month}', [FichajeRRHHController::class, 'verDetalle'])->name('verDetalle');
