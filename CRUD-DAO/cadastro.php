<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-wdith,initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="bootstrap-5.0.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link " href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="cadastro.php">Cadastrar</a>
            </li>
        </ul>
        <h2>Adicionar Usuario</h2>
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <form method="POST" action="adicionar_action.php">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div><br>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div><br>
                    <input type="submit" class="btn btn-primary" value="Adicionar"/>
                </form>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>


    <script type="text/javascript" src="bootstrap-5.0.1/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>