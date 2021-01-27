<?php 

include('conexao.php');


$sql2 = $conn->prepare('SELECT * FROM DEPARTAMENTOS ORDER BY NOME');
$sql2->execute();
$result2 = $sql2->fetchAll();


global $depart;
$depart = array();
foreach ($result2 as $r2) {       
 $depart += array($r2['id_departamento'] => $r2['nome']);
};





if ( isset($_GET['id_funcionario']) ) {

    $id_funcionario = $_GET['id_funcionario'];




    $sql= $conn->prepare("SELECT * FROM FUNCIONARIOS WHERE ID_FUNCIONARIO = $id_funcionario");
    $sql->execute();
    $result = $sql->fetchAll();



    $titulo = 'Editar';

    $nome = $result[0]['nome'];
    $dt_nascimento = $result[0]['dt_nascimento'];
    $dt_admissao = $result[0]['dt_admissao'];
    $genero = $result[0]['genero'];
    $salario = $result[0]['salario'];
    $id_departamento = $result[0]['id_departamento'];
    $acao = 'editar';
    

}else {
    $id_funcionario = ''; 
    $titulo = 'Cadastrar';
    $nome = '';
    $dt_nascimento = '';
    $dt_admissao = '';
    $genero = '';
    $salario = '';
    $id_departamento = '';
    $acao = 'inserir';

}



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Departamentos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
<?php include('menu.php')?>

    <div class="container">

    <h1> <?php echo($titulo); ?> Funcionários</h1>

    <hr>

    

    <form name="'form" action="acao-funcionarios.php" method="POST" class="form" onsubmit="return validaFuncionarios()" > 
    <div class="row">
        <div class="col-sm-5 col-md-4">
        <div class="form-group">
        <h4>Nome</h4>

        <input type="text" name="nome" id="nome" placeholder="Coloque aqui o nome do funcionário" maxlength="80" 
        class="form-control" value="<?=$nome?>">
        </div>
        </div>

        <div class="col-sm-3 col-md-3">
        <div class="form-group">
        <h4>Data de Nascimento</h4>


        <input type="text" name="dt_nascimento" id="dt_nascimento" placeholder="00/00/0000" maxlength="10" class="form-control" value="<?=implode('/',array_reverse(explode('-', $dt_nascimento)))?>">

        </div>
        </div>

        <div class="col-sm-3 col-md-3">
        <div class="form-group">
        <h4>Data de admissão</h4>

        <input type="datetime-local" name="dt_admissao" id="dt_admissao" placeholder="00/00/0000 00:00:00" maxlength="20" 
        class="form-control" value="<?=implode('/',array_reverse(explode('-', $dt_admissao)))?>">
        </div>
        </div>

        <div class="col-sm-3 col-md-2">
        <div class="form-group">

        <h4>Gênero</h4>
        <select class="form-control" name="genero" id="genero">
        <!-- Operador ternário -->
        <option value="M" <?=$genero == 'M' ? 'selected' : ''?> >Masculino</option>
        <option value="F" <?=$genero == 'F' ? 'selected' : ''?> >Feminino</option>
        </select>

    
        </div>
        </div>

        <div class="col-sm-3 col-md-2">
        <div class="form-group">
        <h4>Salário</h4>

        <input type="text" name="salario" id="salario" placeholder="Salário" maxlength="6" 
        class="form-control" value="<?php echo($salario);?>">
        </div>
        </div>

        <div class="col-sm-2 col-md-3">
          <div class="form-group">
            <h4 for="id_departamento">Departamento</h4>
            <select  class="form-control" id="id_departamento" name="id_departamento">
             <option value="0">Selecionar Departamento...</option>
         <?php

         for ($i = 1; $i <= count($depart); $i++) {
            if ($i == $id_departamento) {
               $selecionado = 'selecionado';
            } else {
               $selecionado = '';
            }
         ?>
             <option value="<?php echo ($i); ?>" <?php echo($selecionado) ?>><?php echo ($depart[$i]) ?></option> 
         <?php }; ?>
            </select>

        </div>
        </div>



        


     <div class="row">
         <div class="col-md-6">

         <div class="alert alert-danger hidden" id="erro">Preenchas os campos!</div>

         </div>
     </div>


     <input type="hidden" name="acao" value="<?php echo($acao); ?>">
     <input type="hidden" name="id_funcionario" value="<?php echo($id_funcionario); ?>">


    </form> <br>

    <a href="listar-funcionarios.php" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR </a>
    <button type="submit" class="btn btn-primary"> <i class="far fa-save fa-lg"></i> SALVAR </button>


    </div>


<script src="js/form-funcionarios.js"></script>
<script src="js/jquery.mask.js"></script>
</body>
</html>