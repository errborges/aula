<?php

require_once 'classes/fabricante.php';
require_once 'classes/caracteristica.php';
require_once 'classes/produto.php';

$p1 = new Produto('Chocolate', 10, 2.5);
$f1 = new Fabricante('Fabrica de Cholate', 'rua tudo tal', '0123456789');
$p1->setFabricante($f1);
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Peso', 1.83);
$p1->addCaracteristica('Tamanho', 'P');

/*
echo '<pre>';
var_dump($p1);
print_r($p1);
echo '</pre>';
*/

print "O fabricante: {$p1->getFabricante()->getNome()}. Tem o produto: {$p1->getDescricao()} <br>";
print "Caracterisca:";
foreach ($p1->getCaracteristica() as $caracteristica)
{
    echo '<br>';
    print "{$caracteristica->getNome()} : {$caracteristica->getValor()}";
}