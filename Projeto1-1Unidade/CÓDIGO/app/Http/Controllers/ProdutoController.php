<?php

namespace app\Http\Controllers;


use App\Http\Requests\StoreProdutoRequest;
use Illuminate\Http\Request;
use app\Models\Produto;

class ProdutoController extends Controller
{
  //
  public function index(){
    $produto = Produto::all();
    return view ('produto.index', ['produto'=>$produto]);

  }

public function create(){
  return view('produto.create');
}

public function store(StoreProdutoRequest $request){
  

  $produto = new Produto();
  $produto->nome = $request->nome;
  $produto->tipo = $request->tipo;
  $produto->save();
  return redirect()->route('produto.index');

}

public function show($id){
  if($id){
    $produto = Produto::where('id', $id)->get();
  }else {
    $produto = Produto::all();
  }
  return view ('produto.show',['produto'=>$produto]); //passa objeto
}

public function edit($id){
   $produto = Produto::findorFail($id);
   return view ('produto.edit', ['produto'=>$produto]);
 
}
public function update(StoreProdutoRequest $request){
  Produto::find($request->id)->update($request->all());
  return redirect('produto/index')->with('msg', 'Alteração realizada com sucesso');

}

public function destroy($id){
  Produto::findorFail($id)->delete();
  return redirect('produto/index')->with('msg', 'Produto apagado');
}

}