<?php

/*
$valor = 100;
$valor2 = 100;
$valor3 = 100;

$valor1 = $valor + 5;
$valor2 ++;
$valor3 *= 5;

$teste = ++$valor;

echo '<pre>';
var_dump($valor);
var_dump($valor1);
var_dump($valor2);
var_dump($valor3);
var_dump($teste);
echo '</pre>';
*/

/*
$a = 2;
$b = 4;

//echo $a + 3 * 4 + 5 * $b;
echo ($a + 3) * 4 + (5 * $b);
*/

/*
$valor1 = 100;
$valor2 = '100';

if ($valor1 === $valor2) 
{
    echo 'E igual!';
}
*/

$salario = 900;
$cargo = 'gerente';

if ($salario > 1000 AND $cargo = 'gerente')
{
    echo 'OK!';
}else
{
    echo 'Nao OK!';
}