<?php

$hash = '$2y$10$u0Q84ichipZ6uZbSL.kxg.Nhdagu6gWryvQaW6gLg1lyh122sV7L6';
$senha = '1234';


if(password_verify($senha, $hash)){
    echo 'Senha correta!';
}else{
    echo 'Senha incorreta!';
}