<?php


//METODO ESTÁTICO

namespace Matematica;

class Matematica
{

    public static string $nome = 'Thiago';

    public static function somar($x, $y)
    {
        return $x + $y;
    }
}


echo Matematica::somar(20, 30); // :: TRADUÇÃO - ACESSE UM METODO QUE ESTÁ DENTRO DA CLASSE MATEMATICA

echo Matematica::$nome;