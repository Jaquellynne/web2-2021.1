<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

   <title>@yield('titulo')</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Sistema de vendas</h1>
        </div>
        <div id="nav">
            <ul>
                <li><a href="{{ route('clientes.index) }}">Clientes</a></li>
                <li><a href="{{ route('produto.index) }}">Produtos</a></li>
                <li><a href="{{ route('fornecedor.index) }}">Fornecedores</a></li>
                <li><a href="{{ route('entrada.index) }}">Entradas</a></li>
                <li><a href="{{ route('vendas.index) }}">Vendas</a></li>
                <li><a href="{{ route('ItensVendas.index) }}">Itens Vendas</a></li>
                <li><a href="{{ route('itensentrada.index) }}">Itens Entrada</a></li>

            </ul>
        </div>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        
        <div id="footer">
            copyright @ WEB II
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>