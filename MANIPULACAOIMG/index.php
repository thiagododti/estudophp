<?php

$imagem = imagecreatetruecolor(300, 300);
$cor = imagecolordeallocate($imagem, 255, 0, 0);


imagefill($imagem, 0, 0, $cor);

header("Content-Type: image/jpeg");

imagejpeg($imagem, null, 100);