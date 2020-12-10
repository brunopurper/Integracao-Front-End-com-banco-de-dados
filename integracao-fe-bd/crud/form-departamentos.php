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

    <h1>Cadastrar Departamentos</h1>

    <hr>

    

    <form action="acao-departamentos.php" method="POST" > 
    <div class="row">
        <div class="col-sm-6 col-md-6">
        <div class="form-group">


        <input type="text" name="nome" id="nome" placeholder="NOME" maxlength="50" 
        class="form-control">
        </div>
        </div>

        <div class="col-sm-3 col-md-4">
        <div class="form-group">


        <input type="text" name="sigla" id="sigla" placeholder="SIGLA" maxlength="10" class="form-control">

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

         <div class="alert alert-danger hidden">Preenchas os campos!</div>

         </div>
     </div>


     <input type="hidden" name="acao" value="inserir">
    </form> <br>

    <a href="listar-departamentos.php" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR </a>

    </div>



</body>
</html>