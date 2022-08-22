<?php

$alimento = [
    'nome' => 'laranja',
    'cor' => 'laranja',
    'forma' => 'redonda',
    'tipo' => 'fruta'
];

$chaves = array_keys($alimento);
$valores = array_values($alimento);


echo '<table border="1"><tr>';
foreach ($chaves as $chave) {
    echo '<th>' . $chave . '</th>';
}
echo '</tr>';

echo '<tr>';
foreach ($valores as $valor) {
    echo '<td>' . $valor . '</td>';
}
echo '</tr></table>';

?>
<br>
<table border="1"> 
    <?php foreach ($alimento as $chave => $valor) :?>
     <tr> 
        <th><?php echo $chave; ?></th> 
        <td><?php echo $valor; ?></td> 
    </tr> 
    <?php endforeach; ?>
</table>