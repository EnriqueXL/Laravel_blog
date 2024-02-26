<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

// Acceso mediante url

// inicio
Route::get('/', HomeController::class);

// uso de Route Groups para agrupar el controlador
Route::controller(CursoController::class)->group(function(){
    // inicio vista cursos
    Route::get('cursos', 'index');

    // crear cursos 
    Route::get('cursos/create', 'create');

    // mostrar indivicualmente los cursos
    Route::get('cursos/{curso}','show');
});

// Sin uso de RouteAroups
// inicio vista cursos
// Route::get('cursos', [CursoController::class, 'index']);

// crear cursos 
// Route::get('cursos/create', [CursoController::class, 'create']);

// mostrar indivicualmente los cursos
// Route::get('cursos/{curso}',[CursoController::class, 'show']);


