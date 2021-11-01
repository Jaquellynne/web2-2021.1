<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de itens entrada</title>
</head>
<body>
    <form action="{{route('itensentrada.update', ['id' => $itensentrada->id])}}" method="post">       
        @csrf
        @method('PUT')
        <label for="">Nome dos itens entrada</label>
        <input type="text" name="nome_itens_entrada" id="nome_itens_entrada" value="{{$itensentrada->nome_itens_entrada}}">
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="{{$itensentrada->descricao}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>