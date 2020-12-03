<?php

// $cores = array('green', 'yellow', 'blue', 'red', 'purple', 'brown');

// O jeito clássico de percorrer um vetor

// for ($cont = 0; $cont < sizeof($cores); $cont++) {
//     echo($cores[$cont]);
// }

$cores = array('green', 'yellow', 'blue', 'red', 'purple', 'brown');

foreach ($cores as $cor) {
    ?>

    <p style ="background : <?php echo($cor); ?>" ><?php echo $cor; ?> </p>

<?php 


}

?>






<!-- Altere o algoritmo acima para que as cores sejam exibidas dentro de um parágrafo para cada cor.
Entretanto você não deve colocar a tag p dentro do echo!
-->