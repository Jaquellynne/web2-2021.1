@extends('layouts.app', [
'class' => '',
'elementActive' => 'compra'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('compra.index') }}">Compras</a></li>
                            <li class="breadcrumb-item active text-white">Edição Compra</li>
                        </ol>
                        <h6 class="d-flex  justify-content-end">
                            <a class="btn btn-info" href="{{ route('compra.index') }}" role="button">Voltar</a>
                        </h6>
                    </div>
                    <form action="{{ route('compra.update', $compra->id) }}" class="form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="form-row ml-2">
                                <div class="form-group col-md-4">
                                    <label for="idFornecedor">Fornecedor</label>
                                    <select class="form-control" id="idFornecedor" name="idFornecedor" readonly="readonly"
                                        required>
                                        <option value="{{ $compra->fornecedor->id ?? old('idFornecedor') }}" selected>
                                            {{ $compra->fornecedor->nome ?? old('idFornecedor') }}</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="idFormaPagamento">Forma Pagamento</label>
                                    <select class="form-control" id="idFormaPagamento" name="idFormaPagamento" required>
                                        <option value="{{ $compra->formaPagamento->id ?? old('idFormaPagamento') }}"
                                            selected>{{ $compra->formaPagamento->descricao ?? old('idFormaPagamento') }}
                                        </option>
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
                                        @foreach ($compra->produtosCompra as $prodCompra)

                                            <tr class="text-center prod" id="{{ $cont }}">
                                                <td class="col-4">
                                                    <select class="form-control produtoId"
                                                        id="produto_id{{ $cont }}"
                                                        onchange="trazValor({{ $cont }});" name="idProduto[]"
                                                        required>
                                                        @foreach ($produtos as $produto)
                                                            @if ($prodCompra->idProduto == $produto->id)
                                                                <option value="{{ $produto->id ?? old('idProduto[]') }}"
                                                                    selected>{{ $produto->nome ?? old('idProduto[]') }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $produto->id }}">
                                                                    {{ $produto->nome }}</option>
                                                            @endif
                                                        @endforeach
                                                        <option value="">Escolha um carro</option>
                                                    </select>
                                                </td>
                                                <td class="col-3">
                                                    <input type="text" class="form-control" readonly="readonly"
                                                        value="{{ number_format($prodCompra->valorUnitario, 2, ',', '.') ?? old('valorUnitario[]') }}"
                                                        name="valorUnitario[]" id="valor{{ $cont }}">
                                                </td>
                                                <td class="col-1">
                                                    <input type="number" class="form-control qtd_produto" min="1"
                                                        value="{{ $prodCompra->quantidade ?? old('quantidade[]') }}"
                                                        onchange="calcTotal({{ $cont }});" name="quantidade[]"
                                                        id="qtd{{ $cont }}">
                                                </td>
                                                <td class="col-3">
                                                    <input type="text" class="form-control valorTotal" readonly="readonly"
                                                        value="{{ number_format($prodCompra->valorTotal, 2, ',', '.') ?? old('valorTotal[]') }}"
                                                        name="valorTotal[]" id="valorTotal{{ $cont }}">
                                                </td>
                                                <td class="col-1">
                                                    <a href="#" onclick="excluirProd({{ $cont }});">
                                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php
                                                $cont++;
                                            @endphp
                                        @endforeach
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
                                        value="{{ date('d/m/Y', strtotime($compra->created)) ?? old('created') }}"
                                        name="created" id="created">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="notaFiscal">Código de Compra</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="{{ $compra->notaFiscal ?? old('notaFiscal') }}" name="notaFiscal"
                                        id="notaFiscal">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="qtd_produto">Total de Produtos</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="{{ $compra->quantidade ?? old('qtd_produto') }}" name="qtd_produto"
                                        id="qtd_produto">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="compraTotal">Total a Pagar</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="R$ {{ number_format($compra->valorTotal, 2, ',', '.') ?? old('compraTotal') }}"
                                        name="compraTotal" id="compraTotal">
                                </div>
                            </div>

                            <hr class="ml-3 mr-3" />
                        </div>

                        <div class="card-footer d-flex  justify-content-end">
                            <button type="button" id="finalizar" class="btn btn-primary">Alterar Compra</button>
                            <a class="ml-3 btn btn-secondary" href="{{ route('compra.index') }}"
                                role="button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('pages.compra.scripts.formataProdutos')
@endpush
