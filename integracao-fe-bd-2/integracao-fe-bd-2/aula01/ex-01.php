<?php
#Comentário de uma linha em PHP
//Comentário de uma linha em PHP

$nome = 'Bruno Purper';
$senha = 'abc123';
$idade = '39';
$salario = '3256.47';
$possui_cnh = true;

echo $nome; 
echo ('<br>');
// echo ('Salário:' . $salario);
echo ("Salário: $salario")
?>

<hr>
Funciona mesmo cara!

<p>Seu nome é: <?php echo($nome); ?> </p>
<p>Seu salário é: <?php echo($salario); ?> </p>
<p>Sua idade é: <?php echo($idade); ?> </p>

<!--  -->
