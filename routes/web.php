<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/produtos/cadastrar', [EventController::class, 'cadastrar']);
Route::post('/produtos', [EventController::class, 'store']);

Route::get('/categorias', [EventController::class, 'categorias']);
Route::post('categorias', [EventController::class, 'adicionarCategoria']);
