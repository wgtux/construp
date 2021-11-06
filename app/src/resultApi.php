<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'http://localhost/construp/api/getall.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST =>  'GET'
    ]);

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response, true);

//return $result;

//var_dump($result);

//echo "Nome: ".$result["result"][0]['name']. '</br>';
//echo $result["result"][0]['brand'];
//echo $result["result"][0]['quantity'];

//print_r($name);
//echo  $name;

//echo count($result);

// foreach($item as $qtde){
//     echo $result["result"][$qtde]['name'];
// }

//while()

 for($x=0; $x<=count($result)+1; $x++){
     echo "Nome: ".$result["result"][$x]['name'];
     echo $result["result"][$x]['brand'];
     echo $result["result"][$x]['quantity'];
 }