<?php 
include('conexao.php');

if ( isset ($_POST['acao']) ) {

    $acao = $_POST['acao'];


    switch($acao) {
        case 'inserir':

        if (  isset($_POST['nome'])  && isset($_POST['sigla']) ){


        }
        

        break;

        case 'editar':

        echo('Deve editar no banco');    	

        break;

        case 'excluir':

        echo('Deve excluir no banco');    	

        break;
    }

}

?>
