<!-- Implemente um algoritmo em PHP que liste os números do Vetor um abaixo do outro
- Para os números pares coloque a palavra PAR antes do número
- Para os ímpares coloque a palavra ímpar antes do número
 -->


<?php 

$numeros = array(12,24,33,3,89,9,4);

foreach ($numeros as $numero) {

    if ($numero % 2 == 0) {

        echo("PAR $numero");
    } else {
        echo("IMPAR $numero");
    }

    echo('<br>');
}

?>