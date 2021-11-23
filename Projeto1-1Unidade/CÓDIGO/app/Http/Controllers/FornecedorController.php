<?php

namespace app\Http\Controllers;


use App\Http\Requests\StoreFornecedorRequest;
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

public function store(StoreFornecedorRequest $request){

  $fornecedor = new Fornecedor();
  $fornecedor->nome = $request->nome;
  $fornecedor->CNPJ = $request->CNPJ;
  $fornecedor->email = $request->email;
  $fornecedor->save();
  return redirect()->route('fornecedor.index');

}
public function show($id){
  if($id){
    $fornecedor = Fornecedor::where('id', $id)->get();
  }else {
    $fornecedor = Fornecedor::all();
  }
  return view ('fornecedor.show',['fornecedor'=>$fornecedor]); //passa objeto
}

public function edit($id){
   $fornecedor = Fornecedor::findorFail($id);
   return view ('fornecedor.edit', ['fornecedor'=>$fornecedor]);
 
}
public function update(StoreFornecedorRequest $request){
  Fornecedor::find($request->id)->update($request->all());
  return redirect('fornecedor/index')->with('msg', 'Alteração realizada com sucesso');

}

public function destroy($id){
  Fornecedor::findorFail($id)->delete();
  return redirect('fornecedor/index')->with('msg', 'Fornecedor apagado');
}

}