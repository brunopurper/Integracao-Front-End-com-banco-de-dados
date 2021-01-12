<?php 

// Este arquivo receberá os dados do nosso formulário

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


// echo($_POST['nome']);
// echo($_POST['n1']);
// echo($_POST['n2']);


if (($n1 + $n2) / 2 >= 10) {

    echo('Tragam um troféu para esse aluno, meu deus, que performance!');

    } 
    
    elseif (($n1 + $n2) / 2 >= 7) {
    
        echo('Parabéns, você passou de ano!');

    }
    else {

        echo('Poxa, que pena, você reprovou esse ano, tente novamente ano que vem!');
        
    }
?> 

