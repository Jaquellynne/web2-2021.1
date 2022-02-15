<div class="form-row">

    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome"
            value="{{ $categoria->nome ?? old('nome') }}">
        @if ($errors->has('nome'))
            <strong class="invalid-feedback">{{ $errors->first('nome') }}</strong>
        @endif
    </div>

</div>
