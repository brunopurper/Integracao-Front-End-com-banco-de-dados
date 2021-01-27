<?php
$usuario = 'root';
$senha = '';

try {

#aqui efetuaremos a conexão com o banco de dados.
$conn = new PDO ('mysql:host=localhost;dbname=empresa', $usuario, $senha);
// Aqui habilitamos o PHP a receber mensagens de erro com exceção  
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    
    echo("Banco de Dados está com algum problema, contate um DBA: " .$e->getMessage());
}

?>