<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\ProdutoController;

/*
|-----------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



 // Produto

 Route::get('/index', [ProdutoController::class, 'index']);
 Route::get('/create', [ProdutoController::class, 'create']);
 Route::post('/store', [ProdutoController::class, 'store']);
 Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
 Route::get('/edit/{id}' , [ProdutoController::class, 'edit'])->name('edit');
 Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('update');
 Route::delete('/vendas/{id}', [ProdutoController::class, 'destroy'])->name('delete');



// Vendas
Route::get('/index', [VendasController::class, 'index']);
Route::get('/create', [VendasController::class, 'create']);
Route::post('/store', [VendasController::class, 'store']);
Route::get('/show/{id}', [VendasController::class, 'show'])->name('vendasshow');
Route::get('/edit/{id}' , [VendasController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [VendasController::class, 'update'])->name('update');
Route::delete('/vendas/{id}', [VendasController::class, 'destroy'])->name('delete');


// ItensVendas
Route::get('/index', [ItensVendasController::class, 'index']);
Route::get('/create', [ItensVendasController::class, 'create']);
Route::post('/store', [ItensVendasController::class, 'store']);
Route::get('/show/{id}', [ItensVendasController::class, 'show'])->name('ItensVendasshow');
Route::get('/edit/{id}' , [ItensVendasController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ItensVendasController::class, 'update'])->name('update');
Route::delete('/vendas/{id}', [ItensVendasController::class, 'destroy'])->name('delete');

 // Entrada
 Route::get('/index', [EntradaController::class, 'index']);
 Route::get('/create', [EntradaController::class, 'create']);
 Route::post('/store', [EntradaController::class, 'store']);
 Route::get('/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
 Route::get('/edit/{id}' , [EntradaController::class, 'edit'])->name('edit');
 Route::put('/update/{id}', [EntradaController::class, 'update'])->name('update');
 Route::delete('/vendas/{id}', [EntradaController::class, 'destroy'])->name('delete');

// Itens Entrada
Route::get('/index', [ItensEntradaController::class, 'index']);
Route::get('/create', [ItensEntradaController::class, 'create']);
Route::post('/store', [ItensEntradaController::class, 'store']);
Route::get('/show/{id}', [ItensEntradaController::class, 'show'])->name('itensentradashow');
Route::get('/edit/{id}' , [ItensEntradaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ItensEntradaController::class, 'update'])->name('update');
Route::delete('/vendas/{id}', [ItensEntradaController::class, 'destroy'])->name('delete');