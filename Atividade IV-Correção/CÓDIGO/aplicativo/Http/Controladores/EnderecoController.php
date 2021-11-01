<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Endereco;

class EnderecoController extends Controller
{
  //
  public function index(){
      $endereco = Endereco::all();
      return view ('endereco.index', ['endereco'=>$endereco]);
  
    }

  public function create(){
    return view('endereco.create');
  }

  public function store(Request $request){
    $endereco = new Endereco();
    $endereco->logradouro = $request->logradouro;
    $endereco->bairro = $request->bairro;
    $endereco->cidade = $request->cidade;
    $endereco->uf = $request->uf;
    $endereco->save();
    return redirect('index');

  }
  public function show($id){
    if($id){
      $endereco = Endereco::where('id', $id)->get();
    }else {
      $endereco = Endereco::all();
    }
    return view ('endereco.show',['endereco'=>$endereco]); //passa objeto
  }

  public function edit($id){
     $endereco = Endereco::findorFail($id);
     return view ('endereco.edit', ['endereco'=>$endereco]);
   
  }
  public function update(Request $request){
    Endereco::find($request->id)->update($request->all());
    return redirect('endereco/index')->with('msg', 'Alteração realizada com sucesso');

  }

  public function destroy($id){
    Endereco::findorFail($id)->delete();
    return redirect('endereco/index')->with('msg', 'Endereco apagado');
  }
}