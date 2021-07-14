<?php 
/* 
    SOLID - D - Principio da inversão da Dependência -

    QUANDO SE ESTA FAZENDO UMA INJEÇÃO DE DEPENDENCIA E VOCE PODE MODIFICAR QUE DEPENDENCIA ESTÁ SENDO INJETADA
    O IDEAL E QUE SE CRIE UMA INTERFACE PARA QUE CLASSES USE A MESMA INTERFACE;

*/

interface DbConnection { // INTERFACE DE CONEXÃO FOI CRIADA
    public function connect();
}


class MySqlConnection implements DbConnection{ // AQUI TEMOS DOIS TIPOS DE CONEXÕES COM BANCOS DE DADOS DIFERENTES
    public function connect(){}
}

class OracleConnection implements DbConnection{
    public function connect(){}
}

class UsuarioDAO {

    private $db;

    public function __construct(DbConnection $dbCon)    // A CLASSE SE IMPORTA AGORA SOMENTE SE EXISTE UMA CONEXÃO INDEPENDENTE DO BANCO QUE VAI SER USADO
    {                                                   // SEM PRECISAR MODIFICA-LA PARA USAR 
        $this->db = $dbCon;
    }
}

$dbCon = new MySqlConnection(); //NA HORA DE IMPLEMENTAR ESCOLHE QUAL BANCO DESEJA USAR

$usuarioDao = new UsuarioDAO($dbCon);

