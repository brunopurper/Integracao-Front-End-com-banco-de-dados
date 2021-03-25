<?php
include('verifica-sessao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <?php include('menu.php') ?>
    <div class="container">

        <h1>Bem vindo, <?php echo ($_SESSION['nome_usuario']); ?></h1>
        <p>Aqui em cima na barra superior, você esta prestes a entrar em um projeto de cadastro de funcionários e departamentos de uma empresa, onde você pode cadastrar, editar e excluir qualquer funcionário ou departamento.</p>
    </div>




</body>

</html>