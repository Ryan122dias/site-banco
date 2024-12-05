<?php

$listas_id = $_GET['listas_id'];


?>
<?php include ('header.php');?>

<div class="container">
    <div class="row  mt-5">
        <div class="col-12">
        <h1>exluir</h1>
        <a href="lista_presenca.php"  class="btn btn-primary">voltar</a>
        </div>
    </div>
    <div class="row  mt-5">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                deseja realmente excluir o arquivo ?
            </div>
            <a href="lista-presenca-excluir-action.php?id=<?= $id?>" class="btn btn-danger">excluir</a>
        </div>
    </div>
</div>



