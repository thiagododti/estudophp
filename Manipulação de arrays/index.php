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

$slice = array_slice($array3, 0, 2);    //array_slice pega determinados itens que decidimos pelos parametros
                                        //determinamos que array queremos usar, e passamos em qual chave ele vai começar
print_r($slice);                        //e decidimos quantas chaves queremos que pegue para o novo array
// retorno: Array([0] => a [1] => b)
$array4 = range('a', 'f');

array_splice($array4, 2, 2);            //array splice ja faz o contrario, ele irá pegar uma chave definida
                                        //e irá remover a quantidade de valores que definirmos do proprio array
                                        //nesse caso a função retornará o proprio array modificado
print_r($array4);                       //sem os valores que foram removidos
// retorno: Array([0] => a [1] => b [2] => e [3] => f)

//com array_splice também podemos fazer com que seja inseridos valores nos lugares que removemos
//através do quarto parametro podemos inserir esses valores com a seguinte sintaxe

//array_splice($array4, 2, 2,['X' , 'Z']);

//retorno Array([0] => a [1] => b [2] => X [3] => Z [4] => e [5] => f)

//assim a ordem ocorre, primeiro remove os itens que foram selecionados e em seguinte insere os novos valores passados
//-----------------------------------------------------------------------------------------------------------------------------

$numeros = range(1, 5);

function somar($subtotal, $item)    //array_reduce Reduz um array para um único valor através de um processo iterativo.
{
                                        //através de outra função passada por parametro
    $subtotal = $subtotal + $item;      //nesse exemplo o array_reduce está somando todos os valores
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo $total;                            //o terceiro parametro do array_reduce define o valor inicial do subtotal

//-----------------------------------------------------------------------------------------------------------------------------

//desconstruindo array usando list

$array = ['Thiago', 90 , 'Café', 'Vermelho'];

list($nome, $idade, $bebida, $cor) = $array;
