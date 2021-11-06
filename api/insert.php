<?php
require('../db/config.php');

$method  = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'post'){

    $name = filter_input(INPUT_POST, 'name');
    $description = filter_input(INPUT_POST, 'description');
    $brand = filter_input(INPUT_POST, 'brand');
    $quantity = filter_input(INPUT_POST, 'quantity');
    $date = date('Y-m-d');

    if($name && $description && $brand && $quantity){

        $sql = $pdo->prepare("INSERT INTO material (name, description, brand, quantity, date) VALUES(:name, :description, :brand, :quantity, :date)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':description', $description);
        $sql->bindValue(':brand', $brand);
        $sql->bindValue(':quantity', $quantity);
        $sql->bindValue(':date', $date);
        $sql->execute();

        $id = $pdo->lastInsertId();

        //mostrando os ultimos dados cadastrados
        $array['result'] = [
            'id' => $id,
            'nome' => $name,
            'descricao' => $description,
            'marca' => $brand,
            'quantidade' => $quantity,
            'data' => $date
        ];
    }
    else {
        $array['error'] = 'Campos não enviados';
    }
}
else{
    $array['error'] = 'Metodo não permitido (apenas POST)';
}

require('return.php');