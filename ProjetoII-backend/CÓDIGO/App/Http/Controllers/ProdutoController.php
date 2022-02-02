<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $produtos = Produto::all();
        return view('pages.produto.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::all();
        return view('pages.produto.create',compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $valorVenda = str_replace('.','',$request->valorVenda);
        $valorVenda = str_replace(',','.',$valorVenda);

        $valorCompra = str_replace('.','',$request->valorCompra);
        $valorCompra = str_replace(',','.',$valorCompra);

        $request->merge([
            'valorVenda' => $valorVenda,
            'valorCompra' => $valorCompra,
        ]);

        $data = $request->all();

        if($request->file('foto')->isValid()){

            $nameFile = Str::of($request->nome)->slug('-') . '.' .$request->foto->getClientOriginalExtension();

            $image = $request->foto->storeAs('carros', $nameFile);
            $data['foto'] = $image;
        }

        $produto = Produto::create($data);

        if(!$produto)
            return redirect()->route('produto.index')->with('alert-danger', "Erro ao cadastrar {$request->nome} !!");

        return redirect()->route('produto.index')->with('alert-success', "{$request->nome} foi cadastrado !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::where('id', $id)->first();

        if (!$produto)
            return redirect()->back();

        
        return view('pages.produto.show', [
            'produto' => $produto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::where('id', $id)->first();
        $categorias = Categoria::all();

        if (!$produto)
            return redirect()->back();

        
        return view('pages.produto.edit', [
            'produto' => $produto,
            'categorias' => $categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $produto = Produto::find($id);

        if(!$produto){
            return redirect()->back();

        } 
        $valorVenda = str_replace('.','',$request->valorVenda);
        $valorVenda = str_replace(',','.',$valorVenda);

        $valorCompra = str_replace('.','',$request->valorCompra);
        $valorCompra = str_replace(',','.',$valorCompra);

        $request->merge([
            'valorVenda' => $valorVenda,
            'valorCompra' => $valorCompra,
        ]);
        
        $data = $request->all();

        if($request->foto)
        {
            if($request->foto->isValid()){
                if(Storage::exists($produto->foto)) 
                    Storage::delete($produto->foto);
                    

                $nameFile = Str::of($request->nome)->slug('-') . '.' .$request->foto->getClientOriginalExtension();

                $image = $request->foto->storeAs('carros', $nameFile);
                $data['foto'] = $image;

                $produto->update($data);
            } else {
                return redirect()->back();
            }
        } else{
            $produto->update($request->except(['foto']));
        }

        return redirect()->route('produto.index')->with('alert-success', "{$request->nome} foi alterado !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        if(Storage::exists($produto->foto)) 
            Storage::delete($produto->foto);

        if($produto->delete()){
            return redirect()->route('produto.index')->with('alert-danger', "{$produto->nome} foi excluido !");
        }else{
            return redirect()->route('produto.index')->with('alert-info', "Não foi possivel excluir {$produto->nome}!");
        }
    }
}
