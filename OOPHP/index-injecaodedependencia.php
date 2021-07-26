<?php

// INJEÇÃO DE DEPENDENCIA É QUANDO INSERE UMA CLASSE DENTRO DE OUTRA;

interface MatematicaBasica
{
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica // CRIO AS DUAS CLASSES QUE FAZEM A FUNÇÃO DE SOMA DE FORMAS DIFERENTE POREM COM O MESMO RESULTADO
{

    public function somar($x, $y)
    {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        $res = $x;
        for ($q = 0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Matematica // CRIO UMA CLASSE PARA EU EFETUAR OS CALCULOS QUE VOU ENVIAR ATRAVES DA INJEÇÃO DE DEPENDENCIA NELA.
{
    private $basico;

    public function __construct(MatematicaBasica $b) // CONSTRUO UM METODO PARA RECEBER A CLASSE COM A FORMA DE SOMA QUE EU QUERO PROTEGENDO QUE O METODO TEM QUE VIM ATRAVES DA INTERFACE
    {
        $this->basico = $b;
    }

    public function somar($x, $y) // CRIO O METODO QUE VAI RECEBER OS PARAMETROS PARA SER CALCULADO
    {
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico1()); // ENVIO O METODO DE SOMA PARA DENTRO DA CLASSE QUE VAI RECEBERA INJEÇÃO DE DEPENDENCIA.

echo $mat->somar(10, 15);

// ASSIM NUNCA MAIS IREI ALTERAR A CLASSE MATEMATICA, BASTA EU ALTERAR A CLASSE QUE EU QUERO ENVIAR PARA DENTRO DELA.