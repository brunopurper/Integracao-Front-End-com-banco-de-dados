<?php 

include('conexao.php');

if ( isset($_GET['id_departamento']) ) {

    $id_departamento = $_GET['id_departamento'];


    $sql= $conn->prepare("SELECT * FROM DEPARTAMENTOS WHERE ID_DEPARTAMENTO = $id_departamento");
    $sql->execute();
    $result = $sql->fetchAll();

    $titulo = 'Editar';

    $nome = $result[0]['nome'];
    $sigla = $result[0]['sigla'];
    $acao = 'editar';
    

}else {

    $titulo = 'Cadastrar';
    $nome = '';
    $sigla = '';
    $acao = 'inserir';
    $id_departamento = '';
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
    <div class="container">

    <h1> <?php echo($titulo); ?> Departamentos</h1>

    <hr>

    

    <form action="acao-departamentos.php" method="POST" class="form" onsubmit="return validaDepartamento()" > 
    <div class="row">
        <div class="col-sm-6 col-md-6">
        <div class="form-group">


        <input type="text" name="nome" id="nome" placeholder="NOME" maxlength="50" 
        class="form-control" value="<?php echo($nome);?>">
        </div>
        </div>

        <div class="col-sm-3 col-md-4">
        <div class="form-group">


        <input type="text" name="sigla" id="sigla" placeholder="SIGLA" maxlength="10" class="form-control" value="<?php echo($sigla);?>">

        </div>
        </div>


        <div class="col-sm-3 col-md-2 text-center">
        <div class="form-group">

        <button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-floppy-disk"> </i> SALVAR </button>
        </div>
        </div>  

     </div>

     <div class="row">
         <div class="col-md-6">

         <div class="alert alert-danger hidden" id="erro">Preenchas os campos!</div>

         </div>
     </div>


     <input type="hidden" name="acao" value="<?php echo($acao); ?>">
     <input type="hidden" name="id_departamento" value="<?php echo($id_departamento); ?>">

    </form> <br>

    <a href="listar-departamentos.php" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR </a>

    </div>


<script src="js/form-departamentos.js"></script>
</body>
</html>