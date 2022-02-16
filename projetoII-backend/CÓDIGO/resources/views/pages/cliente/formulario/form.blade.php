<div class="form-row">

    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome"
            value="{{ $cliente->nome ?? old('nome') }}">
        @if ($errors->has('nome'))
            <strong class="invalid-feedback">{{ $errors->first('nome') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" name="endereco"
            id="endereco" value="{{ $cliente->endereco ?? old('endereco') }}">
        @if ($errors->has('endereco'))
            <strong class="invalid-feedback">{{ $errors->first('endereco') }}</strong>
        @endif
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }} cpf" name="cpf" id="cpf"
            value="{{ $cliente->cpf ?? old('cpf') }}">
        @if ($errors->has('cpf'))
            <strong class="invalid-feedback">{{ $errors->first('cpf') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-5">
        <label for="dataNascimento">Data Nascimento</label>
        <input type="date" class="form-control {{ $errors->has('dataNascimento') ? 'is-invalid' : '' }}"
            name="dataNascimento" id="dataNascimento"
            value="{{ $cliente->dataNascimento ?? old('dataNascimento') }}">
        @if ($errors->has('dataNascimento'))
            <strong class="invalid-feedback">{{ $errors->first('dataNascimento') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }} phone"
            name="telefone" id="telefone" value="{{ $cliente->telefone ?? old('telefone') }}">
        @if ($errors->has('telefone'))
            <strong class="invalid-feedback">{{ $errors->first('telefone') }}</strong>
        @endif
    </div>
</div>
