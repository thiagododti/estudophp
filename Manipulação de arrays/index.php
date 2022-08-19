<?php

$array = range(0, 20, 2);   //função range ja cria os arrays com os valores que
                            //definimos, o terceiro parametro definimos o multiplicador
foreach ($array as $item) {
    echo $item . "\n";
} // retorno 0 2 4 6 8 10 12 14 16 18 20

$array2 = [
    'nome' => 'Thiago',
    'idade' => '30'
];

if (key_exists('idade', $array2)) { //key_exists busca por uma chave passada pelo parametro
    $idade = $array2['idade'];      //dentro de um array passado no segundo parametro
    echo $idade . " anos";
}
