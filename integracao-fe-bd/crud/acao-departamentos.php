<?php 
include('conexao.php');

if ( isset ($_REQUEST['acao']) ) {

    $acao = $_REQUEST['acao'];


    switch($acao) {
 
        case 'inserir':

        if (  isset($_POST['nome'])  && isset($_POST['sigla']) ){


            $nome = $_POST['nome'];
            $sigla = strtoupper($_POST['sigla']);

            // agora sim fazemos a inserção no banco de dados

            $sql = $conn->prepare("INSERT INTO DEPARTAMENTOS (nome,sigla) VALUES ('$nome','$sigla') ");
            $sql->execute();

        }

        header('location:listar-departamentos.php');

        break;
// -----------------------------------------------------------------------------------
        case 'editar':

        echo('Deve editar no banco');    	

        break;
// -----------------------------------------------------------------------------------

        case 'excluir':

        if (isset($_GET['id_departamento'])){

        $id_departamento = $_GET['id_departamento'];

        $sql = $conn->prepare("DELETE FROM DEPARTAMENTOS WHERE ID_DEPARTAMENTO = $id_departamento");
        $sql->execute();

        }
        
        header('location:listar-departamentos.php');

  	

        break;
    }

}



?>
