<?php

$produto = [];
$produto['descricao'] = 'Café';
$produto['estoque'] = 100;
$produto['preco'] = 2;
$produto['ultimo'] = 'nada';

$objeto = new stdClass;
foreach ($produto as $chave => $valor)
{
    //if ($valor != 'nada')
    //{
        $objeto->$chave = $valor;
    //}
}

echo '<pre>';
var_dump($objeto);
echo '</pre>';