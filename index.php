<?php

include('app/src/header.php');
include('db/config.php');

//require('app/src/insertApi.php');
        

$list = [];
       
$sql = $pdo->query("SELECT * FROM material");
 
if($sql->rowCount()>0){

    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}
        

?>

<img class="img-fluid rounded mx-auto d-block" src="app/img/logo.png" alt="">

<div class="card mt-4">

    <div class="card-body">
        <h3 class="card-title text-center">Lista de Material</h3>

        <!-- Modal Boostrap  -->

        <!-- Botão Adicionar -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
        Adicionar Material
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cadatro de Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                <form method="POST" class="row g-3" action="app/src/insertApi.php">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Parafuso">
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="form-label">Descicao</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Parafusso dourado para madeira">
                        </div>
                        <div class="col-md-6">
                            <label for="brand" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca Teste">
                        </div>            
                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="100">
                        </div> 
                        
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Cadastrar</button>              
                </form>
            </div>           
        </div>
    </div>
</div>

        <table class="table table-hover">
            <thead>
                
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data Criação</th>
                </tr>
               
            </thead>

            <tbody>
            <?php foreach($list as $material): ?>
            <tr>
                <td><?=$material['name']; ?></td>
                <td><?=$material['description']; ?></td>
                <td><?=$material['brand']; ?></td>
                <td><?=$material['quantity']; ?></td>
                <td><?=$material['date']; ?></td>
    
            </tr>
            <?php endforeach; ?>
            </tbody>  

        </table>
    </div>
</div>


<?php
include('app/src/footer.php');
?>