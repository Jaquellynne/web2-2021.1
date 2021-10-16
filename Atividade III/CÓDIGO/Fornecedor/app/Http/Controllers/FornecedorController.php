<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Fornecedor;

class FornecedorController extends Controller
{
  //
  public function index(){
    $fornecedor = Fornecedor::all();
    return view ('fornecedor.index', ['fornecedor'=>$fornecedor]);

  }

public function create(){
  return view('fornecedor.create');
}

public function store(Request $request){
  $fornecedor = new Fornecedor();
  $fornecedor->nome = $request->nome;
  $fornecedor->CNPJ = $request->CNPJ;
  $fornecedor->email = $request->email;
  $fornecedor->save();
  return redirect('index');

}

}