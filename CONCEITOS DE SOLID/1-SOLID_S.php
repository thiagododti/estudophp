<?php
/* 
    SOLID - S - Principio da responsabilidade única - 

    Separação de responsabilidades quando estiver fazendo as classes.

*/

class Usuario { //CLASSE USUARIO CUIDA DOS DADOS DO USUARIO

    public function setNome() {}
    public function getNome() {}

}

class UsuarioDb{ // CLASSE USUARIODB CUIDA DAS AÇOES DO BANCO DE DADOS

    public function add() {}
    public function update() {}
    public function delete() {}
}