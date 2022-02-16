<div class="form-row">

    <div class="form-group col-md-4">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" name="descricao"
            id="descricao" value="{{ $formapagamento->descricao ?? old('descricao') }}">
        @if ($errors->has('descricao'))
            <strong class="invalid-feedback">{{ $errors->first('descricao') }}</strong>
        @endif
    </div>

</div>
