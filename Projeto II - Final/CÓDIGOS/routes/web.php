<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FormaPagamentoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

});

Route::group(['middleware' => 'auth'], function () {

	Route::get('produto', [ProdutoController::class, 'index'])->name('produto.index');
	Route::get('produto/create', [ProdutoController::class, 'create'])->name('produto.create');
	Route::post('produto/store', [ProdutoController::class, 'store'])->name('produto.store');
	Route::get('produto/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
	Route::put('produto/{produto}', [ProdutoController::class, 'update'])->name('produto.update');
	Route::delete('produto/{produto}', [ProdutoController::class, 'destroy'])->name('produto.destroy');

	Route::get('categoria', [CategoriaController::class, 'index'])->name('categoria.index');
	Route::get('categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
	Route::post('categoria', [CategoriaController::class, 'store'])->name('categoria.store');
	Route::get('categoria/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
	Route::put('categoria/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update');
	Route::delete('categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

	Route::get('fornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index');
	Route::get('fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
	Route::post('fornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');
	Route::get('fornecedor/{fornecedor}/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
	Route::put('fornecedor/{fornecedor}', [FornecedorController::class, 'update'])->name('fornecedor.update');
	Route::delete('fornecedor/{fornecedor}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

	Route::get('cliente', [ClienteController::class, 'index'])->name('cliente.index');
	Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
	Route::post('cliente', [ClienteController::class, 'store'])->name('cliente.store');
	Route::get('cliente/{cliente}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
	Route::put('cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
	Route::delete('cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

	Route::get('formapagamento', [FormaPagamentoController::class, 'index'])->name('formapagamento.index');
	Route::get('formapagamento/create', [FormaPagamentoController::class, 'create'])->name('formapagamento.create');
	Route::post('formapagamento', [FormaPagamentoController::class, 'store'])->name('formapagamento.store');
	Route::get('formapagamento/{formapagamento}/edit', [FormaPagamentoController::class, 'edit'])->name('formapagamento.edit');
	Route::put('formapagamento/{formapagamento}', [FormaPagamentoController::class, 'update'])->name('formapagamento.update');
	Route::delete('formapagamento/{formapagamento}', [FormaPagamentoController::class, 'destroy'])->name('formapagamento.destroy');

	Route::get('venda', [VendaController::class, 'index'])->name('venda.index');
	Route::get('venda/create', [VendaController::class, 'create'])->name('venda.create');
	Route::post('venda', [VendaController::class, 'store'])->name('venda.store');
	Route::get('venda/{venda}/edit', [VendaController::class, 'edit'])->name('venda.edit');
	Route::put('venda/{venda}', [vendaController::class, 'update'])->name('venda.update');
	Route::delete('venda/{venda}', [VendaController::class, 'destroy'])->name('venda.destroy');

	Route::post('venda/buscaprod', [VendaController::class, 'buscaprod'])->name('venda.buscaprod');
	Route::post('venda/buscapreco', [VendaController::class, 'buscapreco'])->name('venda.buscapreco');

	Route::get('compra', [CompraController::class, 'index'])->name('compra.index');
	Route::get('compra/create', [CompraController::class, 'create'])->name('compra.create');
	Route::post('compra', [CompraController::class, 'store'])->name('compra.store');
	Route::get('compra/{compra}/edit', [CompraController::class, 'edit'])->name('compra.edit');
	Route::put('compra/{compra}', [compraController::class, 'update'])->name('compra.update');
	Route::delete('compra/{compra}', [CompraController::class, 'destroy'])->name('compra.destroy');

	Route::post('compra/buscaprod', [CompraController::class, 'buscaprod'])->name('compra.buscaprod');
	Route::post('compra/buscapreco', [CompraController::class, 'buscapreco'])->name('compra.buscapreco');

	Route::get('funcionario', [UserController::class, 'index'])->name('funcionario.index');
	Route::get('funcionario/create', [UserController::class, 'create'])->name('funcionario.create');
	Route::post('funcionario', [UserController::class, 'store'])->name('funcionario.store');
	Route::get('funcionario/{funcionario}/edit', [UserController::class, 'edit'])->name('funcionario.edit');
	Route::put('funcionario/{funcionario}', [UserController::class, 'update'])->name('funcionario.update');
	Route::delete('funcionario/{funcionario}', [UserController::class, 'destroy'])->name('funcionario.destroy');

});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);

});

