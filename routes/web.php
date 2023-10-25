<?php

use App\Http\Controllers\clubeController;
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

/* CONTROLLERS */

Route::get('/', [clubeController::class, 'clube']); 

Route::get('/regulamento', [clubeController::class, 'regulamento']); 

Route::get('/beneficios', [clubeController::class, 'beneficios']); 