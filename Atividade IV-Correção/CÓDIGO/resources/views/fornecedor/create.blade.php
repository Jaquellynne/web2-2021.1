<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
</head>
<body>
    <form action="{{route('fornecedor.create')}}" method="post"> 
        @csrf
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome">
        <label for="">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj">
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="cadastrar">
    </form>

</body>
</html>


