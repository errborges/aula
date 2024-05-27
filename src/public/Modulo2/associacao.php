<?php

require_once 'classes/fabricante.php';
require_once 'classes/produto.php';

$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Fabricante1', 'Rua Tal', '99.999999.333' );
$p1->setFabricante($f1);

//print "O fabricante do produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()} que fica em {$p1->getFabricante()->getEndereco()}";

echo '<pre>';
var_dump($p1);
var_dump($f1);
echo '</pre>';