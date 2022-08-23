<?php

namespace Funcionario;

class Funcionario
{
    public int $id;
    public string $nome;


    public function __construct($funcId)
    {
        $this->id = $funcId;

        //CONSULTA DE BANCO DE DADOS PARA DESCOBRIR O NOME DO FUNCIONARIO;
        // RETORNO DO NOME DO FUNCIONARIO
        $sql = 'THIAGO';

        $this->nome = $sql;
    }
}

$func = new Funcionario(1);

echo $func->nome;

//EM RESUMO O CONTRUTOR E UMA FUNCAO QUE SEMPRE EXECUTA QUANDO UM OBJETO É CRIADO.
//NESSE CASO SEMPRE QUE EU CRIAR UM OBJETO FUNCIONARIO PASSANDO UM 1 DELE
//O CONSTRUTOR VAI BUSCAR NO BANCO O NOME DESSE FUNCIONARIO
//ASSIM NAO PRECISO CRIAR O OBJETO E SÓ DEPOIS IR ATRAS DO NOME DELE
//O CONSTRUTOR JA TRAS PRA MIM NO MOMENTO QUE É CRIADO
