<?php
class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 4;

$p2 = new Produto;
$p2->descricao = 'Café';
$p2->estoque = 20;
$p2->preco = 10;

$p3 = new Produto;
$p3->descricao = 'Café';
$p3->estoque = 20;
$p3->preco = 'dez';

echo '<pre>';
//print_r($p1);
//print_r($p2);
var_dump($p1);
var_dump($p2);
var_dump($p3);
echo '</pre>';