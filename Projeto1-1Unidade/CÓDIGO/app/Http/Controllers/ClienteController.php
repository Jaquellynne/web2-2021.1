<?php

namespace app\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
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

  public function store(StoreClienteRequest $request){

    $cliente = new Cliente();
    $cliente->nome = $request->nome;
    $cliente->debito = $request->debito;
    $cliente->descricao = $request->descricao;
    $cliente->save();
    return redirect()->route('clientes.index');

  }
  public function show($id){
    if($id){
      $cliente = Cliente::where('id', $id)->get();
    }else {
      $cliente = Cliente::all();
    }
    return view ('clientes.show',['clientes'=>$cliente]); //passa objeto
  }

  public function edit($id){
     $cliente = Cliente::findorFail($id);
     return view ('clientes.edit', ['cliente'=>$cliente]);
   
  }
  public function update(StoreClienteRequest $request){
    Cliente::find($request->id)->update($request->all());
    return redirect('clientes/index')->with('msg', 'Alteração realizada com sucesso');

  }

  public function destroy($id){
    Cliente::findorFail($id)->delete();
    return redirect('clientes/index')->with('msg', 'Cliente apagado');
  }
}