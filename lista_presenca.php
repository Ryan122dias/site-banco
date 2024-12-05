<?php

require("conexao.php");

$sql = "select * from  listas ";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    while ($row = $resultado->fetch_assoc()) {

        $dados[] = $row;
    }
}
?>

<?php include('header.php'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h1>Listas De Presenças</h1>
            <a href="index.php" class="btn btn-primary">Voltar</a>
            <a href="lista_presenca_cadastrar.php" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Faciliador</th>
                        <th scope="col">Local</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                

                    <?php if(isset($dados)):
                    foreach ($dados as $item):?>

                    <tr>
<th scope="row"><?php echo isset($item['listas_id']) ? $item['listas_id'] : ''; ?></th>
<td><?= isset($item['evento']) ? $item['evento'] : ''; ?></td>
<td><?= isset($item['facilitador']) ? $item['facilitador'] : ''; ?></td>
<td><?= isset($item['local_evento']) ? $item['local_evento'] : ''; ?></td>
<td><?= isset($item['data_evento']) ? $item['data_evento'] : ''; ?></td>
<td>
    <a href="participantes.php?listas_id=<?= isset($item['listas_id']) ? $item['listas_id'] : '' ?>" class="btn btn-info">Participantes</a>
    <a href="lista_presenca_ver.php?listas_id=<?= isset($item['listas_id']) ? $item['listas_id'] : '' ?>" class="btn btn-primary">Ver</a>
    <a href="lista_presenca_editar.php?listas_id=<?= isset($item['listas_id']) ? $item['listas_id'] : '' ?>" class="btn btn-warning">Editar</a>
    <a href="lista_presenca_excluir.php?listas_id=<?= isset($item['listas_id']) ? $item['listas_id'] : '' ?>" class="btn btn-danger">Excluir</a>
</td>

                    </tr>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>