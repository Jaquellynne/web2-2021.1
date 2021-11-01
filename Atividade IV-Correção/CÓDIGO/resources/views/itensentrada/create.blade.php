<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itens entrada</title>
</head>
<body>
    <form action="{{route('itensentrada.create')}}" method="post">         
         @csrf
        <label for="">Nome itens entrada</label>
        <input type="text" name="nome_itens_entrada" id="nome_itens_entrada">
        <label for="">Descricao</label>
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


