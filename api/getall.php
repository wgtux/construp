<?php

require('../db/config.php');

$method  = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'get'){

    $sql = $pdo->query("SELECT * FROM material");
    
    if($sql->rowCount() > 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $item){    
            $array['result'][] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'brand' => $item['brand'],
                'quantity' => $item['quantity'],
                'date' => $item['date']
            ];
        }
    }     
}
else{
    $array['error'] = 'Metodo não permitido (apenas GET)';
}  

require('return.php');