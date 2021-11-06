<?php

//Inicia o Curl
$curl = curl_init();

//Configura o Curl
curl_setopt_array($curl, [
CURLOPT_URL => 'http://localhost/construp/api/getall.php',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST =>  'POST'
]);

//Renponse
$response = curl_exec($curl);

//Fecha a conexão
curl_close($curl);

//Converte Json para Array
$array = json_decode($response, true);