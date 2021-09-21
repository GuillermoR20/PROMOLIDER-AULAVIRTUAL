<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProducerController;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainProducerController;
use App\Http\Controllers\ProducerProfileController;
use App\Http\Controllers\ProducerSubscriptionController;

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

Route::view('/clase', 'clase');
Route::resource('/dashboard', CoursesController::class);

Route::get('prueba/productor/inicio/mensaje', [ProducerController::class, 'index']);

// Route::get('prueba/productor/inicio', [DashboardController::class, 'index']);

Route::get('prueba/productor/inicio', [MainProducerController::class, 'index']);

// Rutas a Views
Route::get('/productor', [MainProducerController::class, 'index']);
Route::get('/productor/cursos', [CoursesController::class, 'index']);

//pruebas del modulo productor->perfil->actualizar
Route::resource('/productor/perfil', ProducerProfileController::class);

//pruebas del modulo productor->subscripcion
Route::get('/productor/subscripcion', [ProducerSubscriptionController::class, 'index']);

