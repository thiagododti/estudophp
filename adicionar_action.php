<?php

require 'dbconection.php';

$name = filter_input(INPUT_POST, 'nome');
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if($name && $email){

    $sql = $pdo->prepare("SELECT * FROM CADASTRO WHERE EMAIL = ?");
    $sql->bindValue(1, $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO cadastro (nome, email) VALUES (?, ?)");
        $sql->bindValue(1, $name);
        $sql->bindValue(2, $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastro.php");
    }
    
}else{
    header("Location: cadastro.php");
    exit;
}
