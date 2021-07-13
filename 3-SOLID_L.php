<?php
/* 
    SOLID - L - Principio da substituição de liskov

    AO EXTENDER UMA CLASSE, E SUBSTITUIR ALGUM METODO DA CLASSE ANTERIOR É NECESSARIO
    GARANTIR QUE OS METODOS QUE ESTÃO SENDO SUBSTITUIDOS SEJAM METODOS QUE POSSAM SER UTILIZADOS
    EM ALGUM LOCAL ONDE ESTEJA ESPERANDO RECEBER OS METODOS DA CLASSE ORIGINAL.

*/


class A { // CLASSE ORIGINAL RETORNANDO UMA STRING

    public function getNome(){
        return "Meu nome é A";
    }
}

class B extends A { // CLASSE EXTENDIDA DEVE TER O RETORNO DE UMA STRING

    public function getNome()
    {
        return "Meu nome é B";
    }
}

function imprimeNome(A $obj){

    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B(); // A INSTANCIA DO OBJETO B NAO PUXOU O RETORNO DO OBJETO A POIS ELE TEVE O RETORNO SUBSTITUIDO POREM TEVE O MESMO TIPO DE RESULTADO ESPERADO STRING
echo imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2);
