<?php

$db_name = 'construction';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';

try
{
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

}
catch(PDOException $erro)
{
	echo $erro->getMessage();

}

$array =  [
    'error' => '',
    'result'  =>  []
];