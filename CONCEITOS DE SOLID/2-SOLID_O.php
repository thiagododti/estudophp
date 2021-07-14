<?php
/* 
    SOLID - O - Principio Aberto-Fechado 

    Objetos ou classes ou entidades, devem estar aberta para extensão, mas fechadas para modificação

*/

interface Remuneravel { // A CLASSE REMUNERAVEL É CRIADA SEM MODIFICAÇÃO ALGUMA
    public function remuneracao();
}


class ContratoClt implements Remuneravel { // AS OUTRAS CLASSE IMPLEMENTA A CLASSE REMUNERAVEL PARA UTILIZAR O METODO QUE ELA PRECISA TER DENTRO DA CLASSE

    public function remuneracao() {}
}

class Estagio implements Remuneravel{

    public function remuneracao(){}
}

class ContratoPj implements Remuneravel{

    public function remuneracao(){}
}



class FolhaDePagamento { // A CLASSE FOLHA DE PAGAMENTO FAZ O CALCULO COM BASE DOS CRITERIOS DE CADA CLASSE QUE IMPLEMENTOU A CLASSE REMUNERAVEL.

    public function calcular(Remuneravel $funcionario){

      return $funcionario->remuneracao();
    }

    
}

// DESSA FORMA EU INVES DE ALTERAR O METODO PARA TODAS AS CLASSES, EU SO ALTERO O METODO DENTRO DA CLASSE QUE PRECISA SER ALTERADA