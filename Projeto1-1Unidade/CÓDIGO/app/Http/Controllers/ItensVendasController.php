<?php

namespace app\Http\Controllers;

use App\Http\Requests\StoreItensVendasRequest;
use Illuminate\Http\Request;
use app\Models\ItensVendas;

class ItensVendasController extends Controller
{
  //
  public function index(){
    $ItensVendas = ItensVendas::all();
    return view ('ItensVendas.index', ['ItensVendas'=>$ItensVendas]);

  }
public function create(){
  return view('ItensVendas.create');
}
public function store( StoreItensVendasRequest $request){


  $ItensVendas = new ItensVendas();
  $ItensVendas->quantidade = $request->quantidade;
  $ItensVendas->valor_unitario = $request->valor_unitario;
  $itensVendas->save();
  return redirect()->route('ItensVendas.index');

}
public function show($id){
  if($id){
    $ItensVendas = ItensVendas::where('id', $id)->get();
  }else {
    $ItensVendas = ItensVendas::all();
  }
  return view ('ItensVendas.show',['ItensVendas'=>$ItensVendas]); //passa objeto
}
public function edit($id){
   $ItensVendas = ItensVendas::findorFail($id);
   return view ('ItensVendas.edit', ['ItensVendas'=>$ItensVendas]);
 
}
public function update(StoreItensVendasRequest $request){
  ItensVendas::find($request->id)->update($request->all());
  return redirect('ItensVendas/index')->with('msg', 'Alteração realizada com sucesso');

}
public function destroy($id){
  ItensVendas::findorFail($id)->delete();
  return redirect('ItensVendas/index')->with('msg', 'ItensVendas apagada');
}



}