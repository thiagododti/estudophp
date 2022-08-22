<?php

$array = range(0, 20, 2);   //função range ja cria os arrays com os valores que
                            //definimos, o terceiro parametro definimos o multiplicador
foreach ($array as $item) {
    echo $item . "\n";
} // retorno 0 2 4 6 8 10 12 14 16 18 20

//-----------------------------------------------------------------------------------------------------------------------------

$array2 = [
    'nome' => 'Thiago',
    'idade' => '30',
    'profissao' => 'suporte de ti'
];

if (key_exists('idade', $array2)) { //key_exists busca por uma chave passada pelo parametro
    $idade = $array2['idade'];      //dentro de um array passado no segundo parametro
    echo $idade . " anos";
}

//-----------------------------------------------------------------------------------------------------------------------------

$chaves = array_keys($array2); //array_keys montará um array novo somente com o nome das chaves
print_r($chaves);

$valores = array_values($array2); //array_values montará um array novo somente com os valores
print_r($valores);

//-----------------------------------------------------------------------------------------------------------------------------

$array3 = range('a', 'f');

$slice = array_slice($array3, 0, 2);   //array_slice pega determinados itens que decidimos pelos parametros
                                       //determinamos que array queremos usar, e passamos em qual chave ele vai começar
print_r($slice);                       //e decidimos quantas chaves queremos que pegue para o novo array
// retorno: Array([0] => 'a',[1] => 'b')

//-----------------------------------------------------------------------------------------------------------------------------
