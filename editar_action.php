<?php

require 'dbconection.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){
    
    $sql = $pdo->prepare("UPDATE CADASTRO SET nome = ? , email = ? WHERE id = ?");
    $sql->bindValue(1,$name);
    $sql->bindValue(2,$email);
    $sql->bindValue(3,$id);
    $sql->execute();

    header("Location:index.php");
    exit;
    
}else{
    header("Location:index.php");
}