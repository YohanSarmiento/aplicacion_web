<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\contenido;
use App\Http\Controllers\personas;
use App\Http\Controllers\lugares;

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

Route::get('/', [Inicio::class, 'index']);

Route::get('/acerca', [contenido::class, 'listarAcerca']);

Route::get('/tematicas', [contenido::class, 'listarTematicas']);

Route::get('/registro', [personas::class, 'listarRegistro']);

Route::get('/conferencistas', [personas::class, 'listarConferencistas']);

Route::get('/universidades', [lugares::class, 'listarUniversidades']);

Route::get('/turismo', [lugares::class, 'listarTurismo']);
