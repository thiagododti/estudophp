<?php 
/* 
    SOLID - i - Principio da segregação da interface - 

   EM UMA INTERFACE, TEM QUE TER SOMENTE OS METODOS ESSENCIAIS E QUE VAO SER UTILIZADOS
   PELA CLASSE QUE ESTÁ UTILIZANDO ELES.

*/

interface Aves { //TEMOS UMA INTERFACE SOMENTE COM METODOS BASICOS DE TODAS AS AVES
    public function setLocation ($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves { //TEMOS UMA INTERFACE EXTENDENDO SOMENTE PARA AVES QUE VOAM
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam { // AGORA IMPLEMENTAMOS ELA COM TODAS OS METODOS PARA UMA AVE QUE VOA

    public function setLocation ($lat, $lng){}
    public function setAltitude($alt){}
    public function render(){}
}

class Pinguim implements Aves { // E AQUI IMPLEMENTAMOS SOMENTE OS METODOS NECESSARIOS DESSE TIPO DE AVE, JA QUE PINGUIM NAO VOA NESSA SITUAÇÃO
    public function setLocation ($lat, $lng){}
    public function render(){}

}

