<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produto</title>
</head>
<body>
    <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">     
        @csrf
        @method('PUT')
        <label for="">Nome produto</label>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}">
        <label for="">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{$produto->tipo}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>