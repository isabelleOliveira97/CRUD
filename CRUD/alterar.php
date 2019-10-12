
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="atualizar.php" method="post">
    <div class="col-sm-3">

        <?php


require "autoload.php";

use Ifnc\Tads\Gateway\ProdutoGateway;

$conn = new \PDO("sqlite:" . __DIR__ . "/database/tads.db");
ProdutoGateway::setConnection($conn);
$gw = new ProdutoGateway();
$alterar = $gw->find($_GET['id']);
$alterarDados = $alterar[0];

?>

            <div class="form-group">
                <label>Descricao</label>
                <input type="hidden" name ="id" value="<?=$_GET['id']?>">
                <input type="imput" class="form-control" name="descricao" value= "<?= $alterarDados -> descricao?>">
                <label>Estoque</label>
                <input type="imput" class="form-control" name="estoque" value="<?= $alterarDados -> estoque?>">
                <label>Preco de Custo</label>
                <input type="imput" class="form-control" name="preco_custo" value="<?= $alterarDados -> preco_custo?>">
                <label>Preco de Vendas</label>
                <input type="imput" class="form-control" name="preco_venda" value="<?= $alterarDados -> preco_venda?>">
                <label>Codigo de Barras</label>
                <input type="imput" class="form-control" name="codigo_barras" value="<?= $alterarDados -> codigo_barras?>">
                <label>Origem</label>
                <input type="imput" class="form-control" name="origem" value="<?= $alterarDados -> origem?>">
            </div>

        <input class="btn btn-secondary" type="submit" value="Atualizar" id="tbn">
    </div>

</form>

</html>