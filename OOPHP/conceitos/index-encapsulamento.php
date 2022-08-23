<?php

namespace Post;

class Post
{
    public int $id;
    public int $likes = 0;      //PROPRIEDADES - PUBLICAS, ACESSIVEL DE FORA DAS CLASSES
    public array $comments = [];  //PRIVADA NAO É ACESSIVEL DO LADO DE FORA - ACESSIVEL SOMENTE DENTRO DA CLASSE
    private string $author;         //PROTEGIDA NAO É ACESSIVEL DO LADO DE FORA -


    public function aumentarLike()
    {
        $this->likes++; //TRADUÇÃO - OS LIKES(likes) DO PROPRIO($this->) OBJETO SERÃO AUMENTADOS 1 VEZ TODA VEZ QUE FOR UTILIZADO A FUNÇÃO (++).
    }

    public function setAuthor($n)
    {
        $this->author = ucfirst($n);
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$post1 = new Post();

//INSTANCIAÇÃO - CRIAÇÃO DO OBJETO ATRAVÉS DO COMANDO NEW
$post1->setAuthor('Thiago');

$post2 = new Post();
$post2->setAuthor('Lucas');

echo "POSTS: " . $post1->likes . "likes - " . $post1->getAuthor() . "<br/>";
echo "POSTS: " . $post2->likes . "likes - " . $post2->getAuthor();
