<?php 

// Este arquivo receberá os dados do nosso formulário

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];


// echo($_POST['nome']);
// echo($_POST['n1']);
// echo($_POST['n2']);

$media = ((($n1 * 1.5) + ($n2 * 1.5) + ($n3 * 4) + ($n4 * 3)) / 10);

if ((($n1 * 1.5) + ($n2 * 1.5) + ($n3 * 4) + ($n4 * 3)) / 10 >= 10) {

    echo("UOUUUUUUUU!!!, sua média foi de $media, merece um troféu, que performance incrível, você gabaritou essa matéria!");

    } 
    
    elseif ((($n1 * 1.5) + ($n2 * 1.5) + ($n3 * 4) + ($n4 * 3)) / 10 >= 6.51) {
    
        echo("Sua média foi de $media, e com isso você FOI APROVADO NESSA MATÉRIA!!! Parabéns, continue assim!");

    }
    else {

        echo("Sua média foi de $media, sendo assim você reprova nessa matéria :ccc ");
        
    }
?> 
