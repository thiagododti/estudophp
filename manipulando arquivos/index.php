<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
    <?php require('header.php'); ?>

    <form method="post" action="recebedor.php">
    <label for="nome">
        Nome: <br>
        <input type="text" name="nome" id="nome">
    </label>
    <br><br>


    <input type="submit" value="Enviar">
    <hr>
    
    <?php
    if (file_exists('nomes.txt')) {
        echo $texto = file_get_contents('nomes.txt');
    }
    ?>
    </form>

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin = "anonymous" > </script>
    </body>
    </html>

    