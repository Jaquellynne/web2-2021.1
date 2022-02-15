<?php

namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $formapagamentos = FormaPagamento::all();
        return view('pages.formapagamento.index',compact('formapagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('pages.formapagamento.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FormaPagamento::create($request->all());
        return redirect()->route('formapagamento.index')->with('alert-success', "{$request->descricao} foi cadastrado !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formapagamento  $formapagamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formapagamento = FormaPagamento::where('id', $id)->first();

        if (!$formapagamento)
            return redirect()->back();

        
        return view('pages.formapagamento.show', [
            'formapagamento' => $formapagamento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formapagamento  $formapagamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formapagamento = FormaPagamento::where('id', $id)->first();

        if (!$formapagamento)
            return redirect()->back();

        
        return view('pages.formapagamento.edit', [
            'formapagamento' => $formapagamento
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formapagamento  $formapagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formapagamento = FormaPagamento::find($id);

        if(!$formapagamento){
            return redirect()->back();

        } 

        $formapagamento->update($request->all());

        return redirect()->route('formapagamento.index')->with('alert-success', "{$request->descricao} foi alterado !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formapagamento  $formapagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formapagamento = FormaPagamento::findOrFail($id);
        if($formapagamento->delete()){
            return redirect()->route('formapagamento.index')->with('alert-danger', "{$formapagamento->descricao} foi excluido !");
        }else{
            return redirect()->route('formapagamento.index')->with('alert-info', "Não foi possivel excluir {$formapagamento->descricao}!");
        }
    }
}
