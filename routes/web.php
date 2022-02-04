<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'produtos']);
Route::get('/produtos/cadastrar', [EventController::class, 'cadastrar']);
Route::get('/produtos/{idProduto}', [EventController::class, 'show']);
Route::post('/produtos', [EventController::class, 'store']);


Route::get('/categorias', [EventController::class, 'categorias']);
Route::post('categorias', [EventController::class, 'adicionarCategoria']);
