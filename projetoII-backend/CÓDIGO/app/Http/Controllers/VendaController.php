<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\FormaPagamento;
use App\Models\Produto;
use App\Models\ProdutoVenda;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::join('cliente', 'cliente.id', '=', 'venda.idCliente')
                        ->join('formapagamento', 'formapagamento.id', '=', 'venda.idFormaPagamento')
                        ->select('venda.*', 'cliente.nome as cliente', 'formapagamento.descricao as formapag')
                        ->get();
       
        return view('pages.venda.index',['vendas' => $vendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $clientes = Cliente::all();
        $formaspag = FormaPagamento::all();
        $notaFiscal = strtoupper(substr(md5(date("YmdHis")), 1, 13));
        $produtos = Produto::where('quantidade', '>', 0)->get();
        return view('pages.venda.create', [
                        'clientes' => $clientes,
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
        $vendaTotal = explode(" ", $request->vendaTotal);
        $vendaTotal = str_replace('.','',$vendaTotal[1]);
        $valorTotal = str_replace(',','.',$vendaTotal);
        
        $data = date("Y-m-d H:i:s");

        $venda = new Venda();

        $vendaNova = $venda->create([
            'idCliente' => $request->idCliente,
            'idFormaPagamento' => $request->idFormaPagamento,
            'created ' => $data,
            'valorTotal' => floatval($valorTotal),
            'notaFiscal' => $request->notaFiscal,
            'quantidade' => $request->qtd_produto,
            'idFuncionario' => Auth()->user()->id
        ]);

        if($vendaNova) {
            
            for($i = 0; $i < count($request->idProduto); $i++) {
                $produtoVenda = new ProdutoVenda();

                $valorUnit = str_replace('.','',$request->valorUnitario[$i]);
                $valorUnit = str_replace(',','.',$valorUnit);
                
                $valorTotal = str_replace('.','',$request->valorTotal[$i]);
                $valorTotal = str_replace(',','.',$valorTotal);
                
                $produtoVendaNova = $produtoVenda->create([
                    'quantidade' => $request->quantidade[$i],
                    'valorUnitario' => floatval($valorUnit),
                    'valorTotal' => floatval($valorTotal),
                    'idProduto' => $request->idProduto[$i],
                    'idVenda' => $vendaNova->id,
                    'created' => $data
                ]);

                if(!$produtoVendaNova) {
                    return redirect()->route('venda.index')->with('alert-info', "Não foi possivel finalizar venda !");

                } else {
                    $produto = Produto::where('id',$produtoVendaNova->idProduto)->first();
                    $produto->update([
                        'quantidade' => $produto->quantidade - $produtoVendaNova->quantidade,
                    ]);
                }
            }

            return redirect()->route('venda.index')->with('alert-success', "Venda finalizada com sucesso !");

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
        $venda = Venda::where('id',$id)->first();

        $formaspag = FormaPagamento::all();
        $produtos = Produto::where('quantidade', '>', 0)->get();
        $cont = 1;
    
        return view('pages.venda.edit',[
                        'venda' => $venda, 
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
        $venda = Venda::where('id',$id)->first();
        $vendasProd = ProdutoVenda::where('idVenda',$venda->id)->get();
        foreach($vendasProd as $vendaProd) {
            $produto = Produto::where('id',$vendaProd->idProduto)->first();
            $produto->update([
                'quantidade' => $produto->quantidade + $vendaProd->quantidade,
            ]);
            $vendaProd->delete();
        }
        $vendaTotal = explode(" ", $request->vendaTotal);
        $vendaTotal = str_replace('.','',$vendaTotal[1]);
        $valorTotal = str_replace(',','.',$vendaTotal);

        $data = date("Y-m-d H:i:s");

        $vendaNova = $venda->update([
            'idCliente' => $request->idCliente,
            'idFormaPagamento' => $request->idFormaPagamento,
            'updated' => $data,
            'valorTotal' => floatval($valorTotal),
            'quantidade' => $request->qtd_produto,
            'idFuncionario' => Auth()->user()->id
        ]);

        if($vendaNova) {
            
            for($i = 0; $i < count($request->idProduto); $i++) {
                $produtoVenda = new ProdutoVenda();

                $valorUnit = str_replace('.','',$request->valorUnitario[$i]);
                $valorUnit = str_replace(',','.',$valorUnit);
                
                $valorTotal = str_replace('.','',$request->valorTotal[$i]);
                $valorTotal = str_replace(',','.',$valorTotal);
                
                $produtoVendaNova = $produtoVenda->create([
                    'quantidade' => $request->quantidade[$i],
                    'valorUnitario' => floatval($valorUnit),
                    'valorTotal' => floatval($valorTotal),
                    'idProduto' => $request->idProduto[$i],
                    'idVenda' => $venda->id,
                    'created' => $data
                ]);

                if(!$produtoVendaNova) {
                    return redirect()->route('venda.index')->with('alert-info', "Não foi possivel alterar venda {$request->notaFiscal} !");

                } else {
                    $produto = Produto::where('id',$produtoVendaNova->idProduto)->first();
                    $produto->update([
                        'quantidade' => $produto->quantidade - $produtoVendaNova->quantidade,
                    ]);
                }
            }

            return redirect()->route('venda.index')->with('alert-success', "Venda {$request->notaFiscal} alterada com sucesso !");

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
       $venda = Venda::where('id',$id)->first();

       $produtosVenda = ProdutoVenda::where('idVenda',$venda->id)->get();

       foreach($produtosVenda as $produtoVenda) {
           $produto = Produto::where('id',$produtoVenda->idProduto)->first();
           $produto->update([
               'quantidade' => $produto->quantidade + $produtoVenda->quantidade,
           ]);
           $produtoVenda->delete();

        }

        if(!$venda->delete()) {
            return redirect()->route('venda.index')->with('alert-warning', "Não foi possivel excluir venda {$venda->notaFiscal} !");
        }

        return redirect()->route('venda.index')->with('alert-success', "A venda {$venda->notaFiscal} foi excluida !");

    }

    public function buscaprod()
    {
        $produtos = Produto::where('quantidade','>',0)->get();
        return response()->json($produtos);
    }

    public function buscapreco(Request $request)
    {   
        $produto = Produto::where('id',$request->produto_id)->first();
        return response()->json($produto);
    }
}
