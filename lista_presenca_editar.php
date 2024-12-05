<?php
require('conexao.php');

$listas_id = $_GET['listas_id'];

$sql = 'SELECT * FROM listas WHERE listas_id = ?';

$stmt = $conexao->prepare($sql);

if ($stmt) {


    $stmt->bind_param('i', $listas_id);

    $stmt->execute();

    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $dados = $result->fetch_assoc();
    }
} else {
    $msg = '<div class="alert alert-danger" role="alert">
    nao foi possivel preparar o sql
  </div>';
}

?>

<?php include('header.php'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h1>Editar</h1>
            <a href="lista_presenca.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <form action="lista_presenca_editar_action.php" method="post">
            <div class="mb-3" hidden>
                    <label class="form-label">Id</label>
                    <input type="text" class="form-control" name="lista_id" value="<?= $dados['lista_id'] ?>"disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Evento</label>
                    <input type="text" class="form-control" name="evento" value="<?= $dados['evento'] ?>"disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Facilitador</label>
                    <input type="text" class="form-control" name="facilitador" value="<?= $dados['facilitador'] ?>"disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Local</label>
                    <input type="text" class="form-control" name="local_evento" value="<?= $dados['local_evento'] ?>"disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Data</label>
                    <input type="date" class="form-control" name="data_evento" value="<?= $dados['data_evento'] ?>"disabled>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>