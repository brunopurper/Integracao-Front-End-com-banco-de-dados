<!DOCTYPE html>
<?php 
// Como vamos manipular dados no banco, precisamos incluir o arquivo de conexao
include('conexao.php');

$sql = $conn->prepare('SELECT * FROM DEPARTAMENTOS ORDER BY NOME');

$sql->execute();
$result = $sql->fetchAll(); // Converte em um vetor associativo legivel ao php os reg do BD 

?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php include('menu.php')?>

    <div class="container">

    <h1>Departamentos</h1>
    <?php 
      if (isset($_GET['msg'])){
        ?>

    <div class="alert alert-danger">
    <i class="glyphicon glyphicon-ban-circle"></i> Departamento possui funcionários vinculados, <strong> NÃO </strong> é possível excluir!

    </div>
    
    <?php    
      }
    ?>
    <hr>

    <a href="form-departamentos.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> NOVO</a>
    <hr>

        <table class="table table-hover">
            <thead >
                <tr>
                    <th>Nome</th>
                    <th>Sigla</th>
                    <th class="text-right">Ação</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            

            foreach ($result as $r) {

                

            ?>
            <tr>
                <td><?php echo($r['nome']); ?></td>
                <td><?php echo($r['sigla']); ?></td>
                
                <td class="text-right" >

                <a href="form-departamentos.php?id_departamento=<?php echo($r['id_departamento']);?>" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil"> </i>  </a>
                

                  <!-- Button trigger modal -->
           <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#myModal-<?php echo($r['id_departamento']); ?>"> 
            <i class="glyphicon glyphicon-trash"> </i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal-<?php echo($r['id_departamento']);?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Você realmente deseja excluir o Departamento <?php echo($r['nome']); ?>? </h4>
                  </div>
                  <div class="modal-body">
                  Lembrando que essa alteração é <strong>irreversível</strong> e afeta diretamente a base de dados da empresa!! 
        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>

                    <a href="acao-departamentos.php?acao=excluir&id_departamento=<?php echo($r['id_departamento'])?>" class="btn btn-danger">CONFIRMAR</a>
                  </div>
                </div>
              </div>
            </div>













              </td>
            </tr>

            <?php 

            }

            ?>
            
            </tbody>
        </table>

        <a href="index.php" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR </a>


    </div>


</body>
</html>