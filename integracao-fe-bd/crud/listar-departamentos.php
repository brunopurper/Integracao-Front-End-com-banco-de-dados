<!DOCTYPE html>
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

        <table class="table table-hover">
            <thead >
                <tr>
                    <th>Nome</th>
                    <th>Sigla</th>
                    <th class="text-right">Ação</th>
                </tr>
            </thead>

            <tbody>

            <tr>
                <td>Aqui vai nome dp</td>
                <td>Aqui vai a sigla</td>
                <td class="text-right" >

                <a href="#" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil"> </i>  </a>
                
                <a href="#" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"> </i>  </a>

                </td>
            </tr>

            
            </tbody>
        </table>


    </div>

</body>
</html>