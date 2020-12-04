<?php 

// Este arquivo receberá os dados do nosso formulário

$nome = $_POST['nome'];
$idade = $_POST['idade'];


echo($_POST['nome']);
echo($_POST['idade']);

if ($idade >= 18) {
    ?>
      <img src="img/carro.png">

    <?php
    } else {
    ?>

      <img src="img/taxi.png">

    <?php
    }
    ?> 