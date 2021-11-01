<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens vendas</title>
</head>
<body>
    <form action="{{route('ItensVendas.create')}}" method="post">         
         @csrf
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">Valor Unitario</label>
        <input type="text" name="valor_unitario" id="valor_unitario">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


