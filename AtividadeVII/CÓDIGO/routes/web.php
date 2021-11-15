<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\ClienteController;

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

Route::get('/', function(){
    return view('layouts.main');
});



 // Clientes
 Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
 Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
 Route::post('/store', [ClienteController::class, 'store']);
 Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
 Route::get('/clientes/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
 Route::get('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
 Route::delete('/clientes/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');

 // Endereco
 Route::get('/endereco/index', [EnderecoController::class, 'index'])->name('endereco.index');
 Route::get('/endereco/create', [EnderecoController::class, 'create'])->name('endereco.create');
 Route::post('/store', [EnderecoController::class, 'store']);
 Route::get('/show/{id}', [EnderecoController::class, 'show'])->name('endereco.show');
 Route::get('/endereco/edit', [EnderecoController::class, 'edit'])->name('endereco.edit');
 Route::get('/endereco/update/{id}', [EnderecoController::class, 'update'])->name('endereco.update');
 Route::delete('/endereco/delete/{id}', [EnderecoController::class, 'destroy'])->name('endereco.delete');

 // Fornecedor
 Route::get('/fornecedor/index', [FornecedorController::class, 'index'])->name('fornecedor.index');
 Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
 Route::post('/store', [FornecedorController::class, 'store']);
 Route::get('/show/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
 Route::get('/fornecedor/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
 Route::get('/fornecedor/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
 Route::delete('/fornecedor/delete/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');

 // Vendas
 Route::get('/vendas/index', [VendasController::class, 'index'])->name('vendas.index');
 Route::get('/vendas/create', [VendasController::class, 'create'])->name('vendas.create');
 Route::post('/store', [VendasController::class, 'store']);
 Route::get('/show/{id}', [VendasController::class, 'show'])->name('vendas.show');
 Route::get('/vendas/edit' , [VendasController::class, 'edit'])->name('vendas.edit');
 Route::put('/vendas/update/{id}', [VendasController::class, 'update'])->name('vendas.update');
 Route::delete('/vendas/delete/{id}', [VendasController::class, 'destroy'])->name('vendas.delete');

 // ItensVendas
 Route::get('/ItensVendas/index', [ItensVendasController::class, 'index'])->name('ItensVendas.index');
 Route::get('/ItensVendas/create', [ItensVendasController::class, 'create'])->name('ItensVendas.create');
 Route::post('/store', [ItensVendasController::class, 'store']);
 Route::get('/show/{id}', [ItensVendasController::class, 'show'])->name('ItensVendas.show');
 Route::get('/ItensVendas/edit' , [ItensVendasController::class, 'edit'])->name('ItensVendas.edit');
 Route::put('/ItensVendas/update/{id}', [ItensVendasController::class, 'update'])->name('ItensVendas.update');
 Route::delete('/ItensVendas/delete/{id}', [ItensVendasController::class, 'destroy'])->name('ItensVendas.delete');

 // Entrada
 Route::get('/entrada/index', [EntradaController::class, 'index'])->name('entrada.index');
 Route::get('/entrada/create', [EntradaController::class, 'create'])->name('entrada.create');
 Route::post('/store', [EntradaController::class, 'store']);
 Route::get('/show/{id}', [EntradaController::class, 'show'])->name('entrada.show');
 Route::get('/entrada/edit', [EntradaController::class, 'edit'])->name('entrada.edit');
 Route::get('/entrada/update/{id}', [EntradaController::class, 'update'])->name('entrada.update');
 Route::delete('/entrada/delete/{id}', [EntradaController::class, 'destroy'])->name('entrada.delete');


 // Itens Entrada
 Route::get('/itensentrada/index', [ItensEntradaController::class, 'index'])->name('itensentrada.index');
 Route::get('/itensentrada/create', [ItensEntradaController::class, 'create'])->name('itensentrada.create');
 Route::post('/store', [ItensEntradaController::class, 'store']);
 Route::get('/show/{id}', [ItensEntradaController::class, 'show'])->name('itensentrada.show');
 Route::get('/itensentrada/edit' , [ItensEntradaController::class, 'edit'])->name('itensentrada.edit');
 Route::put('/itensentrada/update/{id}', [ItensEntradaController::class, 'update'])->name('itensentrada.update');
 Route::delete('/itensentrada/delete/{id}', [ItensEntradaController::class, 'destroy'])->name('itensentrada.delete');

 // Produto

 Route::get('/produto/index', [ProdutoController::class, 'index'])->name('produto.index');
 Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
 Route::post('/store', [ProdutoController::class, 'store']);
 Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
 Route::get('/produto/edit' , [ProdutoController::class, 'edit'])->name('produto.edit');
 Route::put('/produto/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
 Route::delete('/produto/delete/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');