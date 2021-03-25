<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de LOGIN</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <div class="container">
  <div style="width: 500px; height:500px; margin: 0 auto;"> 
    <h2>Login C.R.U.D </h2>
    <form action="valida-login.php" method="POST" class="form">
      <input id="login" type="text" name="usuario" placeholder="Usuario" class="form-control">
      <br>
      <input id="senha" type="password" name="senha" placeholder="Senha" class="form-control">
      <br>
      <button type="submit" class="btn btn-success">LOGIN</button>
      <button type="button" onclick="location.href='esqueceu-senha.php'" class="btn btn-danger">Esqueceu sua senha?</button>


    </form>

    </div>
  </div>


  <script src="js/login.js"></script>
</body>
</html>
