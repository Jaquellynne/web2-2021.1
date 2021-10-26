<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Entrada</title>
</head>
<body>
    <form action="store" method="post">
        @csrf
        <label for="">Data da entrada</label>
        <input type="text" name="data_entrada" id="data_entrada">
        <label for="">Data da saida</label>
        <input type="text" name="data_saida" id="data_saida">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


