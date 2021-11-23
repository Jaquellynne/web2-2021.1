<?php

namespace app\Http\Controllers;

use App\Http\Requests\StoreEntradaRequest;
use Illuminate\Http\Request;
use app\Models\Entrada;

class EntradaController extends Controller
{
  //
  public function index(){
    $entrada = Entrada::all();
    return view ('entrada.index', ['entrada'=>$entrada]);

  }

public function create(){
  return view('entrada.create');
}

public function store(StoreEntradaRequest $request){

  $entrada = new Entrada();
  $entrada->data_entrada = $request->data_entrada;
  $entrada->data_saida = $request->data_saida;
  $entrada->save();
  return redirect()->route('entrada.index');

}
public function show($id){
  if($id){
    $entrada = Entrada::where('id', $id)->get();
  }else {
    $entrada = Entrada::all();
  }
  return view ('entrada.show',['entrada'=>$entrada]); //passa objeto
}

public function edit($id){
   $entrada = Entrada::findorFail($id);
   return view ('entrada.edit', ['entrada'=>$entrada]);
 
}
public function update(StoreEntradaRequest $request){
  Entrada::find($request->id)->update($request->all());
  return redirect('entrada/index')->with('msg', 'Alteração realizada com sucesso');

}

public function destroy($id){
  Entrada::findorFail($id)->delete();
  return redirect('entrada/index')->with('msg', 'Entrada apagada');
}


}