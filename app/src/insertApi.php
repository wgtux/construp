<?php

require('../../api/insert.php');

$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$brand = filter_input(INPUT_POST, 'brand');
$quantity = filter_input(INPUT_POST, 'quantity');
$date = date('Y-m-d');

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'http://localhost/construp/api/insert.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST =>  'POST',
    CURLOPT_POSTFIELDS => $post
    ]);

$response = curl_exec($curl);

echo $response;

curl_close($curl);