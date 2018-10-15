<?php

//CONEXÃO AO BANCO DE DADOS
$host = 'mysql:dbname=blog;host=localhost';
$user = 'root';
$pass = '';

try {

	$pdo = new PDO($host, $user, $pass);

} catch (PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>