<?php


class Post { // CLASSE

    public $likes = 0;      //PROPRIEDADES - PUBLICAS, ACESSIVEL DE FORA DAS CLASSES
    public $comments = [];  //PRIVADA NAO É ACESSIVEL DO LADO DE FORA - ACESSIVEL SOMENTE DENTRO DA CLASSE
    public $author;         //PROTEGIDA NAO É ACESSIVEL DO LADO DE FORA - 


    public function aumentarLike(){
        $this->likes++; //TRADUÇÃO - OS LIKES(likes) DO PROPRIO($this->) OBJETO SERÃO AUMENTADOS 1 VEZ TODA VEZ QUE FOR UTILIZADO A FUNÇÃO (++).
    }

}

$post1 = new Post(); //INSTANCIAÇÃO - CRIAÇÃO DO OBJETO ATRAVÉS DO COMANDO NEW
$post1->aumentarLike();

$post2 = new Post();
$post2->likes = 10;



echo "POSTS: ".$post1->likes."<br/>";
echo "POSTS: ".$post2->likes;