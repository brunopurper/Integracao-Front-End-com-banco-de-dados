<?php 

include('conexao.php');

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

    

    <form action="acao-funcionarios.php" method="POST" class="form" onsubmit="return validaDepartamento()" > 
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

        <input type="text" name="dt_admissao" id="dt_admissao" placeholder="0000-00-00" maxlength="20" 
        class="form-control" value="<?=$dt_admissao?>">
        </div>
        </div>

        <div class="col-sm-3 col-md-2">
        <div class="form-group">

        <h4>Gênero</h4>
        <select class="form-control" name="genero" id="genero">
        <!-- Operador ternário -->
        <option value="M" <?=$genero == 'M' ? 'selected' : ''?> >M</option>
        <option value="F" <?=$genero == 'F' ? 'selected' : ''?> >F</option>
        </select>

        <!-- <input type="text" name="genero" id="genero" placeholder="M/F" maxlength="1" 
        class="form-control" value="<?php echo($genero);?>"> -->
        </div>
        </div>

        <div class="col-sm-3 col-md-2">
        <div class="form-group">
        <h4>Salário</h4>

        <input type="text" name="salario" id="salario" placeholder="Salário" maxlength="6" 
        class="form-control" value="<?php echo($salario);?>">
        </div>
        </div>

        <div class="col-sm-3 col-md-2">
        <div class="form-group">
        <h4>Departamento</h4>

        <input type="text" name="id_departamento" id="id_departamento" placeholder="Departamento" maxlength="60" 
        class="form-control" value="<?php echo($id_departamento);?>">
        
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


<!-- <script src="js/form-departamentos.js"></script> -->
</body>
</html>