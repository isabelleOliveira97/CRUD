<?php
require "autoload.php";
use Ifnc\Tads\Gateway\ProdutoGateway;
$conn = new \PDO("sqlite:".__DIR__."/database/tads.db");
ProdutoGateway::setConnection($conn);
$gw = new ProdutoGateway();
$produtos = $gw->all();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Atividade</title>
</head>
<body>



<div class="container">
    <div class="col-md2 bg-secondary text-light rounded mt-2">
        <p class="h1 ">Lista De Produtos<p>
    </div>
        <div class="col-md-12"  align="center">
            <h1><a href="formulario.html"><input class="btn btn-secondary" type="submit" value=" + "></a></h1>
        </div>


        
    <table class="table bg-secondary text-light rounded">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">Estoque</th>
            <th scope="col">Preco Custo</th>
            <th scope="col">Preco de Venda</th>
            <th scope="col">Codigo de Barras</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Origem</th>
            <th scope="col">Apagar</th>
            <th scope="col">Alterar</th>


        </tr>
        </thead>
        <tbody>
        <?php
        foreach($produtos as $produto){
            ?>
            <tr>
                <th scope="row"><?=$produto->id?></th>
                <td><?=$produto->descricao?></td>
                <td><?=$produto->estoque?></td>
                <td><?=$produto->preco_custo?></td>
                <td><?=$produto->preco_venda?></td>
                <td><?=$produto->codigo_barras?></td>
                <td><?=$produto->data_cadastro?></td>
                <td><?=$produto->origem?></td>
                <td><a href="apagar.php?id=<?=$produto->id?>" class="bg-dark rounded text-light p-2">Apagar</a></td>
                <td ><a href="alterar.php?id=<?=$produto->id?>" class="bg-dark rounded text-light p-2">Alterar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>