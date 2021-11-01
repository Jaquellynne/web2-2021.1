<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="{{route('produto.create')}}" method="post">  
        @csrf
        <label for="">Nome produto</label>
        <input type="text" name="nome" id="nome">
        <label for="">Tipo</label>
        <input type="text" name="tipo" id="tipo">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


