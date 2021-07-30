<?php

namespace Post;

class Post //POST TEM SUAS CARACTERISTICAS BASICAS
{

    private int $id;
    private int $likes = 0;

    public function setId($i)
    {
        $this->id = $i;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLikes($l)
    {
        $this->likes = $l;
    }

    public function getLikes()
    {
        return $this->likes;
    }
}

class Foto extends Post // FOTO HERDA AS CARACTERISCAS DO POST E ACRESCENTA AS CARACTERISCIAS QUE SO ELA TEM ATRAVES DO EXTENDS
{
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function getUrl()
    {
        return $this->url;
    }
}


$foto = new Foto(20);
$foto->setLikes(12);

echo "Foto#" . $foto->getId() . " " . $foto->getLikes()  . " Likes ";
