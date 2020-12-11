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
    <div class="container">

    <h1>Departamentos</h1>

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

                <a href="#" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil"> </i>  </a>
                
                <a onclick="return confirm('Deseja realmente excluir o departamento? (Essas alterações são irreversíveis, tenha cuidado!)')" href="acao-departamentos.php?acao=excluir&id_departamento=<?php echo($r['id_departamento']); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

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