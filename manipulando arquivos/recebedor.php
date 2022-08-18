<?php

$nome = filter_input(INPUT_POST, 'nome');

if (!file_exists('nomes.txt')) {
    file_put_contents('nomes.txt', "<li>" . $nome . "</li>");
    header('Location:index.php');
} else {
    $texto = file_get_contents('nomes.txt');
    if (empty($texto)) {
        file_put_contents('nomes.txt', "<li>" . $nome . "</li>");
        header('Location:index.php');
        exit;
    } else {
        file_put_contents('nomes.txt', $texto . "\n<li>" . $nome . "</li>");
        header('Location:index.php');
        exit;
    }
}
