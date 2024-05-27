<?php

$produto = new stdClass;
$produto->descricao = 'Chocolate';
$produto->estoque = 10;
$produto->preco = 8;

$vetor1 = (array) $produto;

$vetor2 = [ 'descicao' => 'Café',
            'estoque' => 20,
            'preco' => 2 ];

$produto2 = (object) $vetor2;

echo '<pre>';
var_dump($vetor1);
var_dump($produto2);
echo '</pre>';