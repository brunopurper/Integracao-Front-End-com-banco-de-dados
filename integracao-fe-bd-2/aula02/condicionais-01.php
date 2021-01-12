<?php

$idade = 16;

if ($idade >= 18) {

    echo ('Pode dirigir');
} else {
    echo ('Infelizmente você não pode dirigir ainda :c');
}


$veiculo = 'Camaro';

if ($veiculo == 'bmw') {
    echo ('Valor: 120.000,00');
} elseif ($veiculo == 'Ferrari') {
    echo ('Valor: 600.000,00');
} elseif ($veiculo == 'Porsche') {
    echo ('Valor: 300.000,00');
} else {
    echo ('Valor: 170.000,00');
}


// Switch / Case

switch ($veiculo) {
    case 'BMW':
        echo ('Valor: 120.000,00');

        break;

    case 'Ferrari':
        echo ('Valor: 620.000,00');

        break;

    case 'Porsche':
        echo ('Valor: 300.000,00');

        break;

    default:
        echo ('Valor: 120.000,00');

        break;
}


// Condição ternária

$genero = 'M';
$genero_extenso = $genero == 'M' ? 'Masculino' : 'Feminino';

echo($genero_extenso);

?>
