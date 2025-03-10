<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '.');
define('DB', 'gestaoescolar');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Nao foi possivel conectar');
?>