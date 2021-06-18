<?php

require 'dbconection.php';

$id = filter_input(INPUT_GET, 'id');

if($id){

    $sql = $pdo->prepare("DELETE FROM CADASTRO WHERE id = ?");
    $sql->bindValue(1,$id);
    $sql->execute();

    header("Location:index.php");
    exit;
}