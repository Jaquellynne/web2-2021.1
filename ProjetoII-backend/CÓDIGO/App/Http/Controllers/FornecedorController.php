<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $fornecedores = Fornecedor::all();
        return view('pages.fornecedor.index',compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('pages.fornecedor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedor.index')->with('alert-success', "{$request->nome} foi cadastrado !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::where('id', $id)->first();

        if (!$fornecedor)
            return redirect()->back();

        
        return view('pages.fornecedor.show', [
            'fornecedor' => $fornecedor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::where('id', $id)->first();

        if (!$fornecedor)
            return redirect()->back();

        
        return view('pages.fornecedor.edit', [
            'fornecedor' => $fornecedor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::find($id);

        if(!$fornecedor){
            return redirect()->back();

        } 

        $fornecedor->update($request->all());

        return redirect()->route('fornecedor.index')->with('alert-success', "{$request->nome} foi alterado !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        if($fornecedor->delete()){
            return redirect()->route('fornecedor.index')->with('alert-danger', "{$fornecedor->nome} foi excluido !");
        }else{
            return redirect()->route('fornecedor.index')->with('alert-info', "Não foi possivel excluir {$fornecedor->nome}!");
        }
    }
}
