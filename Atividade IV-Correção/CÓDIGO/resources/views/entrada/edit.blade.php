<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de entrada</title>
</head>
<body>
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Data da entrada </label>
        <input type="text" name="data_entrada" id="data_entrada" value="{{$entrada->quantidade}}">
        <label for="">Data da saida</label>
        <input type="text" name="data_saida" id="data_saida" value="{{$entrada->data_saida}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>