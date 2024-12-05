<?php include('header.php'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h1>Participantes</h1>
            <a href="lista_presenca.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                     
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Evento</label>
                        <input type="text" class="form-control" name="evento" value="TEC.110.019" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Facilitador</label>
                        <input type="text" class="form-control" name="facilitador" value="LUSCAS RONDON" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Local</label>
                        <input type="text" class="form-control" name="local" value="SENAI CUIABÁ" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data</label>
                        <input type="date" class="form-control" name="data" value="12/11/2024" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Participantes
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Cadastrar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Participante</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Nome</label>
                                            <input type="text" class="form-control" name="nome">
                                        </div>
                                        <div class="mb3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Selecione</option>
                                                <option value="1">Matutino</option>
                                                <option value="2">Vespertino</option>
                                                <option value="3">Noturno</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>