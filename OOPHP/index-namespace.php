<?php

// NAMESPACE É UTILIZADO PARA DEFINIR A DIFERENÇA ENTRE 2 CLASSES QUE POSSUI O MESMO NOME POREM ESTÃO EM ARQUIVOS DIFERENTES
// ASSIM CASO EU ACABE UTILIZANDO OS 2 ARQUIVOS JUNTOS O NAMESPACE AUXILIAR EM DIFERENCIAR AS 2 CLASSES ATRAVES DO ATALHO
// NAMESPACE_DEFINIDO\NOME_DA_CLASSE();

require 'classes/classe1.php';
require 'classes/classe2.php';

$a = new classe1\MinhaClasse();

echo $a->testar();
