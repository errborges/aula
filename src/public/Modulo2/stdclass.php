<?php

$produto = new stdClass;
$produto->descricao = 'Chocolate';
$produto->estoque = 10;
$produto->preco = 8;

echo '<pre>';
var_dump($produto);
echo '</pre>';