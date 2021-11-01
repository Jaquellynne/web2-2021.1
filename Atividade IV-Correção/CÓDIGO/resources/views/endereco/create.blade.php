<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de endereco</title>
</head>
<body>
    <form action="{{route('endereco.create')}}" method="post">  
        @csrf
        <label for="">Nome do logradouro</label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="">Bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for="">UF</label>
        <input type="text" name="uf" id="uf">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


