<?php

require 'dbconection.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);


$name = filter_input(INPUT_POST, 'nome');
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if($name && $email){

    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastro.php");
        exit;
    }
} else{
    header("Location: cadastro.php");
        exit;
}