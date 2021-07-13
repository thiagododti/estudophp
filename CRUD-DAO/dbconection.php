<?php

$dbname = 'estudo_thiago';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$pdo = new PDO("mysql:dbname=".$dbname.";host=".$dbhost, $dbuser, $dbpass);