<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ItensEntrada;

class ItensEntradaController extends Controller
{
  //
  public function index(){
    $itensentrada = ItensEntrada::all();
    return view ('itensentrada.index', ['itensentrada'=>$itensentrada]);

  }

public function create(){
  return view('itensentrada.create');
}

public function store(Request $request){
  $itensentrada = new ItensEntrada();
  $itensentrada->nome_itens_entrada = $request->nome_itens_entrada;
  $itensentrada->descricao = $request->descricao;
  $itensentrada->save();
  return redirect('index');

}
public function show($id){
  if($id){
    $itensentrada = ItensEntrada::where('id', $id)->get();
  }else {
    $itensentrada = ItensEntrada::all();
  }
  return view ('itensentrada.show',['itensentrada'=>$itensentrada]); //passa objeto
}

public function edit($id){
   $itensentrada = ItensEntrada::findorFail($id);
   return view ('itensentrada.edit', ['itensentrada'=>$itensentrada]);
 
}
public function update(Request $request){
  ItensEntrada::find($request->id)->update($request->all());
  return redirect('itensentrada/index')->with('msg', 'Alteração realizada com sucesso');

}

public function destroy($id){
  ItensEntrada::findorFail($id)->delete();
  return redirect('itensentrada/index')->with('msg', 'Itens Entrada apagada');
}

}