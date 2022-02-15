<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\FormaPagamento;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\ProdutoCompra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::join('fornecedor', 'fornecedor.id', '=', 'compra.idFornecedor')
                        ->join('formapagamento', 'formapagamento.id', '=', 'compra.idFormaPagamento')
                        ->select('compra.*', 'fornecedor.nome as fornecedor', 'formapagamento.descricao as formapag')
                        ->get();
       
        return view('pages.compra.index',['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $fornecedores = Fornecedor::all();
        $formaspag = FormaPagamento::all();
        $notaFiscal = strtoupper(substr(md5(date("YmdHis")), 1, 13));
        $produtos = Produto::get();
        return view('pages.compra.create', [
                        'fornecedores' => $fornecedores,
                        'formaspag' => $formaspag,
                        'produtos' => $produtos,
                        'notaFiscal' => $notaFiscal
                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $compraTotal = explode(" ", $request->compraTotal);
        $compraTotal = str_replace('.','',$compraTotal[1]);
        $valorTotal = str_replace(',','.',$compraTotal);
        
        $data = date("Y-m-d H:i:s");

        $compra = new Compra();

        $compraNova = $compra->create([
            'idFornecedor' => $request->idFornecedor,
            'idFormaPagamento' => $request->idFormaPagamento,
            'created ' => $data,
            'valorTotal' => floatval($valorTotal),
            'notaFiscal' => $request->notaFiscal,
            'quantidade' => $request->qtd_produto,
            'idFuncionario' => Auth()->user()->id
        ]);

        if($compraNova) {
            
            for($i = 0; $i < count($request->idProduto); $i++) {
                $produtoCompra = new ProdutoCompra();

                $valorUnit = str_replace('.','',$request->valorUnitario[$i]);
                $valorUnit = str_replace(',','.',$valorUnit);
                
                $valorTotal = str_replace('.','',$request->valorTotal[$i]);
                $valorTotal = str_replace(',','.',$valorTotal);
                
                $produtoCompraNova = $produtoCompra->create([
                    'quantidade' => $request->quantidade[$i],
                    'valorUnitario' => floatval($valorUnit),
                    'valorTotal' => floatval($valorTotal),
                    'idProduto' => $request->idProduto[$i],
                    'idCompra' => $compraNova->id,
                    'created' => $data
                ]);

                if(!$produtoCompraNova) {
                    return redirect()->route('compra.index')->with('alert-info', "Não foi possivel finalizar compra !");

                } else {
                    $produto = Produto::where('id',$produtoCompraNova->idProduto)->first();
                    $produto->update([
                        'quantidade' => $produto->quantidade + $produtoCompraNova->quantidade,
                    ]);
                }
            }

            return redirect()->route('compra.index')->with('alert-success', "Compra finalizada com sucesso !");

        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = Compra::where('id',$id)->first();

        $formaspag = FormaPagamento::all();
        $produtos = Produto::get();
        $cont = 1;
    
        return view('pages.compra.edit',[
                        'compra' => $compra, 
                        'formaspag' => $formaspag,
                        'produtos' => $produtos,
                        'cont' => $cont
                    ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $compra = Compra::where('id',$id)->first();
        $comprasProd = ProdutoCompra::where('idCompra',$compra->id)->get();
        foreach($comprasProd as $compraProd) {
            $produto = Produto::where('id',$compraProd->idProduto)->first();
            $produto->update([
                'quantidade' => $produto->quantidade - $compraProd->quantidade,
            ]);
            $compraProd->delete();
        }
        $compraTotal = explode(" ", $request->compraTotal);
        $compraTotal = str_replace('.','',$compraTotal[1]);
        $valorTotal = str_replace(',','.',$compraTotal);

        $data = date("Y-m-d H:i:s");

        $compraNova = $compra->update([
            'idFornecedor' => $request->idFornecedor,
            'idFormaPagamento' => $request->idFormaPagamento,
            'updated' => $data,
            'valorTotal' => floatval($valorTotal),
            'quantidade' => $request->qtd_produto,
            'idFuncionario' => Auth()->user()->id
        ]);

        if($compraNova) {
            
            for($i = 0; $i < count($request->idProduto); $i++) {
                $produtoCompra = new ProdutoCompra();

                $valorUnit = str_replace('.','',$request->valorUnitario[$i]);
                $valorUnit = str_replace(',','.',$valorUnit);
                
                $valorTotal = str_replace('.','',$request->valorTotal[$i]);
                $valorTotal = str_replace(',','.',$valorTotal);
                
                $produtoCompraNova = $produtoCompra->create([
                    'quantidade' => $request->quantidade[$i],
                    'valorUnitario' => floatval($valorUnit),
                    'valorTotal' => floatval($valorTotal),
                    'idProduto' => $request->idProduto[$i],
                    'idCompra' => $compra->id,
                    'created' => $data
                ]);

                if(!$produtoCompraNova) {
                    return redirect()->route('compra.index')->with('alert-info', "Não foi possivel alterar compra {$request->notaFiscal} !");

                } else {
                    $produto = Produto::where('id',$produtoCompraNova->idProduto)->first();
                    $produto->update([
                        'quantidade' => $produto->quantidade + $produtoCompraNova->quantidade,
                    ]);
                }
            }

            return redirect()->route('compra.index')->with('alert-success', "Compra {$request->notaFiscal} alterada com sucesso !");

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $compra = Compra::where('id',$id)->first();

       $produtosCompra = ProdutoCompra::where('idCompra',$compra->id)->get();

       foreach($produtosCompra as $produtoCompra) {
           $produto = Produto::where('id',$produtoCompra->idProduto)->first();
           $produto->update([
               'quantidade' => $produto->quantidade - $produtoCompra->quantidade,
           ]);
           $produtoCompra->delete();

        }

        if(!$compra->delete()) {
            return redirect()->route('compra.index')->with('alert-warning', "Não foi possivel excluir compra {$compra->notaFiscal} !");
        }

        return redirect()->route('compra.index')->with('alert-success', "A compra {$compra->notaFiscal} foi excluida !");

    }

    public function buscaprod()
    {
        $produtos = Produto::get();
        return response()->json($produtos);
    }

    public function buscapreco(Request $request)
    {   
        $produto = Produto::where('id',$request->produto_id)->first();
        return response()->json($produto);
    }

}
