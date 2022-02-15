@extends('layouts.app', [
'class' => '',
'elementActive' => 'venda'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('venda.index') }}">Vendas</a></li>
                            <li class="breadcrumb-item active text-white">Cadastro Venda</li>
                        </ol>
                        <h6 class="d-flex  justify-content-end">
                            <a class="btn btn-info" href="{{ route('venda.index') }}" role="button">Voltar</a>
                        </h6>
                    </div>
                    <form action="{{ route('venda.store') }}" class="form" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-body">

                            <div class="form-row ml-2">
                                <div class="form-group col-md-4">
                                    <label for="idCliente">Cliente</label>
                                    <select class="form-control" id="idCliente" name="idCliente" required>
                                        <option value="" selected>Selecione Cliente</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="idFormaPagamento">Forma Pagamento</label>
                                    <select class="form-control" id="idFormaPagamento" name="idFormaPagamento" required>
                                        <option value="" selected>Selecione Forma Pagamento</option>
                                        @foreach ($formaspag as $formapag)
                                            <option value="{{ $formapag->id }}">{{ $formapag->descricao }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="table-responsive-sm col-12">
                                <table class="table table-hover" id="produto">
                                    <thead class="thead-light text-primary">
                                        <tr class="text-center">
                                            <th>
                                                Produto
                                            </th>

                                            <th>
                                                Valor Unitário
                                            </th>

                                            <th>
                                                Quantidade
                                            </th>

                                            <th>
                                                Valor Total
                                            </th>

                                            <th>
                                                Remover
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody id="prod">
                                        <tr class="text-center prod" id="1">
                                            <td class="col-4">
                                                <select class="form-control produtoId" id="produto_id1"
                                                    onchange="trazValor(1);" name="idProduto[]" required>
                                                    <option value="" selected>Escolha um carro</option>
                                                    @foreach ($produtos as $produto)
                                                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="col-3">
                                                <input type="text" class="form-control" readonly="readonly" value="0"
                                                    name="valorUnitario[]" id="valor1">
                                            </td>
                                            <td class="col-1">
                                                <input type="number" class="form-control qtd_produto" min="1" value="0"
                                                    onchange="calcTotal(1);" name="quantidade[]" id="qtd1">
                                            </td>
                                            <td class="col-3">
                                                <input type="text" class="form-control valorTotal" readonly="readonly"
                                                    value="0" name="valorTotal[]" id="valorTotal1">
                                            </td>
                                            <td class="col-1">
                                                <a href="#" onclick="excluirProd(1);">
                                                    <i class="fa fa-trash fa-2x text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a class="btn btn-outline-success" href="#" id="addprod">
                                    <i class="fa fa-plus" aria-hidden="true"> adicionar item</i>
                                </a>
                            </div>

                            <hr class="ml-3 mr-3" />

                            <div class="form-row ml-2 d-flex justify-content-between">
                                <div class="form-group col-md-2">
                                    <label for="created">Data</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="{{ date('d/m/Y') }}" name="created" id="created">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="notaFiscal">Código de Venda</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="{{ $notaFiscal }}" name="notaFiscal" id="notaFiscal">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="qtd_produto">Total de Produtos</label>
                                    <input type="text" class="form-control" readonly="readonly" value="0"
                                        name="qtd_produto" id="qtd_produto">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="vendaTotal">Total a Pagar</label>
                                    <input type="text" class="form-control" readonly="readonly" value="R$ 0"
                                        name="vendaTotal" id="vendaTotal">
                                </div>
                            </div>

                            <hr class="ml-3 mr-3" />
                        </div>

                        <div class="card-footer d-flex  justify-content-end">
                            <button type="button" id="finalizar" class="btn btn-primary">Finalizar Compra</button>
                            <a class="ml-3 btn btn-secondary" href="{{ route('venda.index') }}"
                                role="button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('pages.venda.scripts.formataProdutos')
@endpush
