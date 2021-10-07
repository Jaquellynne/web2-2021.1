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

 Route::get('/', function (){
     return view('welcome');
 });
 Route::get('/clientes', [ClienteController::class, 'show']);

 /* Route::get('/fornecedor', [FornecedorController::class, 'show']); */

 ?>