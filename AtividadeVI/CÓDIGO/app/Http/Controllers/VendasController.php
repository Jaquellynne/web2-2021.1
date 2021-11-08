<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Vendas;

class VendasController extends Controller
{
  //
  public function index(){
    $vendas = Vendas::all();
    return view ('vendas.index', ['vendas'=>$vendas]);

  }
public function create(){
  return view('vendas.create');
}
public function store(Request $request){
  $vendas = new Vendas();
  $vendas->valor_total = $request->valor_total;
  $vendas->valor_troco = $request->valor_troco;
  $vendas->desconto = $request->desconto;
  $vendas->save();
  return redirect('index');
}
public function show($id){
  if($id){
    $vendas = Vendas::where('id', $id)->get();
  }else {
    $vendas = Vendas::all();
  }
  return view ('vendas.show',['vendas'=>$vendas]); //passa objeto
}
public function edit($id){
   $vendas = Vendas::findorFail($id);
   return view ('vendas.edit', ['vendas'=>$vendas]); 
}
public function update(Request $request){
  Vendas::find($request->id)->update($request->all());
  return redirect('vendas/index')->with('msg', 'Alteração realizada com sucesso');

}
public function destroy($id){
  Vendas::findorFail($id)->delete();
  return redirect('vendas/index')->with('msg', 'Venda apagada');
}

}