<div class="form-row">

    <div class="form-group col-md-4">
        <label for="name" title="Campo de preenchimento obrigatório">
            Nome <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name"
            value="{{ $funcionario->name ?? old('name') }}">
        @if ($errors->has('name'))
            <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="endereco" title="Campo de preenchimento obrigatório">
            Endereço <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" name="endereco"
            id="endereco" value="{{ $funcionario->endereco ?? old('endereco') }}">
        @if ($errors->has('endereco'))
            <strong class="invalid-feedback">{{ $errors->first('endereco') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="nivelAcesso" title="Campo de preenchimento obrigatório">
            Nivel de Acesso <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control {{ $errors->has('nivelAcesso') ? 'is-invalid' : '' }}"
            name="nivelAcesso" id="nivelAcesso" value="{{ $funcionario->nivelAcesso ?? old('nivelAcesso') }}">
        @if ($errors->has('nivelAcesso'))
            <strong class="invalid-feedback">{{ $errors->first('nivelAcesso') }}</strong>
        @endif
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="cpf" title="Campo de preenchimento obrigatório">
            CPF <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }} cpf" name="cpf" id="cpf"
            value="{{ $funcionario->cpf ?? old('cpf') }}">
        @if ($errors->has('cpf'))
            <strong class="invalid-feedback">{{ $errors->first('cpf') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-5">
        <label for="dataNascimento" title="Campo de preenchimento obrigatório">
            Data Nascimento <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="date" class="form-control {{ $errors->has('dataNascimento') ? 'is-invalid' : '' }}"
            name="dataNascimento" id="dataNascimento"
            value="{{ $funcionario->dataNascimento ?? old('dataNascimento') }}">
        @if ($errors->has('dataNascimento'))
            <strong class="invalid-feedback">{{ $errors->first('dataNascimento') }}</strong>
        @endif
    </div>

    <div class="form-group col-md-3">
        <label for="telefone" title="Campo de preenchimento obrigatório">
            Telefone <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }} phone"
            name="telefone" id="telefone" value="{{ $funcionario->telefone ?? old('telefone') }}">
        @if ($errors->has('telefone'))
            <strong class="invalid-feedback">{{ $errors->first('telefone') }}</strong>
        @endif
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="email" title="Campo de preenchimento obrigatório">
            Email <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input name="email" id="email" type="email"
            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
            value="{{ $funcionario->email ?? old('email') }}">
        @if ($errors->has('email'))
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="password" title="Campo de preenchimento obrigatório">
            Senha <span class="{{ $funcionario->id ?? 'fa fa-asterisk text-danger' }}"></span>
        </label>
        <input name="password" id="password" type="password"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
        @if ($errors->has('password'))
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        <label for="password_confirmation" title="Campo de preenchimento obrigatório">
            Confirmação de Senha <span class="{{ $funcionario->id ?? 'fa fa-asterisk text-danger' }}"></span>
        </label>
        <input name="password_confirmation" type="password"
            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
        @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <label for="foto">Foto</label>
        <input type="file" class="form-control {{ $errors->has('foto') ? 'is-invalid' : '' }}" id="foto" name="foto"
            value="{{ $funcionario->foto ?? old('foto') }}">
        @if ($errors->has('foto'))
            <strong class="invalid-feedback">{{ $errors->first('foto') }}</strong>
        @endif
    </div>
</div>
