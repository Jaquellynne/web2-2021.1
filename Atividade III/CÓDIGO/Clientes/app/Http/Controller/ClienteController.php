<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Cliente;

class ClienteController extends Controller
{
  //
  public function index(){
      $clientes = Cliente::all();
      return view ('clientes.index', ['clientes'=>$clientes]);
  
    }

  public function create(){
    return view('clientes.create');
  }

  public function store(Request $request){
    $cliente = new Cliente();
    $cliente->nome = $request->nome;
    $cliente->debito = $request->debito;
    $cliente->descricao = $request->descricao;
    $cliente->save();
    return redirect('index');



  }
  
  
}