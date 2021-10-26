<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vendas</title>
</head>
<body>
    <form action="store" method="post">
        @csrf
        <label for="">Valor total da venda</label>
        <input type="text" name="valor_total" id="valor_total">
        <label for="">Valor do troco</label>
        <input type="text" name="valor_troco" id="valor_troco">
        <label for="">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


