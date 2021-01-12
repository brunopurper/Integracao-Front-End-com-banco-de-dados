<?php


$usuario = 'root';
$senha = '';

#aqui efetuaremos a conexão com o banco de dados.

$conn = new PDO ('mysql:host=localhost;dbname=empresa', $usuario, $senha);

?>

