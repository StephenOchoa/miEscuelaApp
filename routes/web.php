<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
//Alumnos
Route::get('/alumnos', [AlumnoController::class, 'consultar']);
Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);
Route::get('alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);
//Especialidades
Route::get('/especialidades', [EspecialidadController::class, 'consultar']);
Route::get('/especialidades/registrar', [EspecialidadController::class, 'registrar']);
Route::post('/especialidades/guardar', [EspecialidadController::class, 'guardar']);
Route::get('/especialidad/eliminar/{id}', [EspecialidadController::class, 'eliminar']);
Route::get('especialidad/editar/{id}', [EspecialidadController::class, 'editar']);
Route::post('especialidad/actualizar/{id}', [EspecialidadController::class, 'actualizar']);
