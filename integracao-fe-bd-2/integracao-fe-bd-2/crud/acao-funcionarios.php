<?php
include('conexao.php');
include('verifica-sessao.php');

if (isset($_REQUEST['acao'])) {

    $acao = $_REQUEST['acao'];


    switch ($acao) {

        case 'inserir':

            if (isset($_POST['nome'])  && isset($_POST['dt_nascimento']) && isset($_POST['dt_admissao']) && isset($_POST['genero']) && isset($_POST['salario']) && isset($_POST['id_departamento'])) {

                // $id_funcionario = $_POST['id_funcionario'];
                $nome = $_POST['nome'];
                $dt_nascimento = implode('-',array_reverse(explode('/', $_POST['dt_nascimento'])));
                $dt_admissao = $_POST['dt_admissao'];
                $genero = ($_POST['genero']);
                $salario = ($_POST['salario']);
                // var_dump($dt_nascimento);die;
                $id_departamento = ($_POST['id_departamento']);

                // agora sim fazemos a inserção no banco de dados

                $sql = $conn->prepare("INSERT INTO FUNCIONARIOS (nome,dt_nascimento, dt_admissao,genero,salario,id_departamento) VALUES ('$nome','$dt_nascimento','$dt_admissao', '$genero','$salario','$id_departamento') ");

                 $sql->execute();
            }


            break;
            // -----------------------------------------------------------------------------------
        case 'editar':


            if (isset($_POST['nome'])  && isset($_POST['dt_nascimento']) && isset($_POST['dt_admissao']) && isset($_POST['genero']) && isset($_POST['salario']) && isset($_POST['id_departamento'])) {
                $nome = $_POST['nome'];
                $dt_nascimento = implode('-',array_reverse(explode('/', $_POST['dt_nascimento'])));
                $dt_admissao = ($_POST['dt_admissao']);
                $genero = ($_POST['genero']);
                $salario = ($_POST['salario']);
                $id_departamento = ($_POST['id_departamento']);
                $id_funcionario = $_POST['id_funcionario'];




                $sql = $conn->prepare("UPDATE FUNCIONARIOS SET NOME = '$nome', DT_NASCIMENTO = '$dt_nascimento', DT_ADMISSAO = '$dt_admissao', GENERO='$genero', SALARIO = '$salario', ID_DEPARTAMENTO = '$id_departamento'  WHERE id_funcionario = $id_funcionario");               

                $sql->execute();
            }



            break;
            // -----------------------------------------------------------------------------------

        case 'excluir':

            if (isset($_GET['id_funcionario'])) {

                $id_funcionario = $_GET['id_funcionario'];

                try {
                    $sql = $conn->prepare("DELETE FROM FUNCIONARIOS WHERE ID_FUNCIONARIO = $id_funcionario");
                    $sql->execute();
                } catch (Exception $e) {
                    header('location:listar-funcionarios.php?msg=erro');
                    exit;
                }
            }




            break;
    }

    header('location:listar-funcionarios.php');
}
