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
                <a class="nav-link active" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastrar</a>
            </li>
        </ul>
        <?php 
        
        require 'dbconection.php';
        require 'dao/UsuarioDaoMysql.php';

        $usuarioDao = new UsuarioDaoMysql($pdo);
        $lista = $usuarioDao->findAll();        
        ?>

        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>
            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td><?=$usuario->getId();?></td>
                    <td><?=$usuario->getNome();?></td>
                    <td><?=$usuario->getEmail();?></td>
                    <td>
                        <a class="btn btn-primary" href="editar.php?id=<?=$usuario->getId();?>">Alterar</a>
                        <a class="btn btn-primary" href="excluir.php?id=<?=$usuario->getId();?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <script type="text/javascript" src="bootstrap-5.0.1/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>