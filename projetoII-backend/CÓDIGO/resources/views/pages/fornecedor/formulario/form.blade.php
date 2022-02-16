<div class="form-row">

    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome"
            value="{{ $fornecedor->nome ?? old('nome') }}">
        @if ($errors->has('nome'))
            <strong class="invalid-feedback">{{ $errors->first('nome') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" name="endereco"
            id="endereco" value="{{ $fornecedor->endereco ?? old('endereco') }}">
        @if ($errors->has('endereco'))
            <strong class="invalid-feedback">{{ $errors->first('endereco') }}</strong>
        @endif
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : '' }} cnpj" name="cnpj"
            id="cnpj" value="{{ $fornecedor->cnpj ?? old('cnpj') }}">
        @if ($errors->has('cnpj'))
            <strong class="invalid-feedback">{{ $errors->first('cnpj') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-5">
        <label for="email">Email</label>
        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
            id="email" value="{{ $fornecedor->email ?? old('email') }}">
        @if ($errors->has('email'))
            <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }} phone"
            name="telefone" id="telefone" value="{{ $fornecedor->telefone ?? old('telefone') }}">
        @if ($errors->has('telefone'))
            <strong class="invalid-feedback">{{ $errors->first('telefone') }}</strong>
        @endif
    </div>
</div>
