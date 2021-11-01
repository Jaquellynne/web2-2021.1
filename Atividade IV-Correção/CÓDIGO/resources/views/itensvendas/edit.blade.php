<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de itens vendas</title>
</head>
<body>
    <form action="{{route('ItensVendas.update', ['id' => $ItensVendas->id])}}" method="post">      
        @csrf
        @method('PUT')
        <label for="">Quantidade </label>
        <input type="text" name="quantidade" id="quantidade" value="{{$ItensVendas->quantidade}}">
        <label for="">Valor Unitario</label>
        <input type="text" name="valor_unitario" id="valor_unitario" value="{{$ItensVendas->valor_unitario}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>