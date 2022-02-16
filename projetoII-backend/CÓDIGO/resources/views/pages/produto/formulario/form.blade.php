<div class="form-row">

    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome"
            value="{{ $produto->nome ?? old('nome') }}">
        @if ($errors->has('nome'))
            <strong class="invalid-feedback">{{ $errors->first('nome') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="marca">Marca</label>
        <input type="text" class="form-control {{ $errors->has('marca') ? 'is-invalid' : '' }}" name="marca"
            id="marca" value="{{ $produto->marca ?? old('marca') }}">
        @if ($errors->has('marca'))
            <strong class="invalid-feedback">{{ $errors->first('marca') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="cor">Cor</label>
        <input type="text" class="form-control {{ $errors->has('cor') ? 'is-invalid' : '' }}" name="cor" id="cor"
            value="{{ $produto->cor ?? old('cor') }}">
        @if ($errors->has('cor'))
            <strong class="invalid-feedback">{{ $errors->first('cor') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-1">
        <label for="ano">Ano</label>
        <input type="text" class="form-control {{ $errors->has('ano') ? 'is-invalid' : '' }}" name="ano" id="ano"
            value="{{ $produto->ano ?? old('ano') }}">
        @if ($errors->has('ano'))
            <strong class="invalid-feedback">{{ $errors->first('ano') }}</strong>
        @endif
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="idCategoria">Categoria</label>
        <select class="form-control" id="idCategoria" name="idCategoria">
            <option value="{{ $produto->categoria->id ?? old('idCategoria') }}" selected>
                {{ $produto->categoria->nome ?? old('idCategoria') }}</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
        @if ($errors->has('idCategoria'))
            <strong class="invalid-feedback">{{ $errors->first('idCategoria') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-2">
        <label for="quantidade">Quantidade</label>
        <input type="text" class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}"
            name="quantidade" id="quantidade" value="{{ $produto->quantidade ?? old('quantidade') }}">
        @if ($errors->has('quantidade'))
            <strong class="invalid-feedback">{{ $errors->first('quantidade') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="valorCompra">Valor Compra</label>
        <input type="text" class="form-control {{ $errors->has('valorCompra') ? 'is-invalid' : '' }} money"
            name="valorCompra" id="valorCompra" value="{{ $produto->valorCompra ?? old('valorCompra') }}">
        @if ($errors->has('valorCompra'))
            <strong class="invalid-feedback">{{ $errors->first('valorCompra') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="valorVenda">Valor Venda</label>
        <input type="text" class="form-control {{ $errors->has('valorVenda') ? 'is-invalid' : '' }} money"
            name="valorVenda" id="valorVenda" value="{{ $produto->valorVenda ?? old('valorVenda') }}">
        @if ($errors->has('valorVenda'))
            <strong class="invalid-feedback">{{ $errors->first('valorVenda') }}</strong>
        @endif
    </div>

</div>

<div class="form-row mt-2">
    <div class="col-md-6">
        <label for="foto">Foto</label>
        <input type="file" class="form-control {{ $errors->has('foto') ? 'is-invalid' : '' }}"
            placeholder="Selecione uma foto" id="foto" name="foto" value="{{ $produto->foto ?? old('foto') }}">
        @if ($errors->has('foto'))
            <strong class="invalid-feedback">{{ $errors->first('foto') }}</strong>
        @endif
    </div>
</div>
