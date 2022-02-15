<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $clientes = Cliente::all();
        return view('pages.cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('pages.cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('alert-success', "{$request->nome} foi cadastrado !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::where('id', $id)->first();

        if (!$cliente)
            return redirect()->back();

        
        return view('pages.cliente.show', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::where('id', $id)->first();

        if (!$cliente)
            return redirect()->back();

        
        return view('pages.cliente.edit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            return redirect()->back();

        } 

        $cliente->update($request->all());

        return redirect()->route('cliente.index')->with('alert-success', "{$request->nome} foi alterado !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        if($cliente->delete()){
            return redirect()->route('cliente.index')->with('alert-danger', "{$cliente->nome} foi excluido !");
        }else{
            return redirect()->route('cliente.index')->with('alert-info', "Não foi possivel excluir {$cliente->nome}!");
        }
    }
}
