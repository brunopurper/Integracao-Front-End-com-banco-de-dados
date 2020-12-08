<?php 

include('conexao.php');


// Dentro do PREPARE colocamos sintaxe SQL

$sql = $conn->prepare ('SELECT * FROM funcionarios order by nome;');
$sql->execute();
// Logicamente precisamos de alguma variável para armazenar esta resposta 
$result=$sql->fetchAll();

#Usamos muito como método de debug, só para ver o que há dentro de alguma variável.

// var_dump($result);

// Percorrendo o vetor de dados que venho do banco


foreach ($result as $r) {
    echo($r ['nome'] . "<br>". $r['salario']);
    echo("<br>");
}

?>