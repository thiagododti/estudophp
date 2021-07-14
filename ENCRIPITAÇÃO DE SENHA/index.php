<?php

$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT);

ECHO "SENHA ORIGINAL: ".$senha."<br/>";
ECHO "HASH: ".$hash;