<?php

/*
$salario = 1000;
$tempo = 12;

if (($salario < 1000) AND ($tempo >= 12))
{
    print 'Tem direito a promoção.';
}
else
{
    print 'Está quase lá mas ainda não tem direito a promoção.';
}
*/
/*
$valor_venda = 100;

/*
if ($valor_venda  > 100)
{
    $resultado = 'muito caro';
}
else
{
    $resultado = 'pode comprar';
}
*/
//$resultado = ($valor_venda > 100) ? 'muito caro' : 'pode comprar';
//var_dump($resultado);

/*
$contador = 1;
while ($contador <= 5)
{
    print $contador . ' ';
    $contador++;
}
*/

/*
for ($contador = 1; $contador <= 10 ; $contador++)
{
    print $contador . ' ';
}
*/

/*
$tipo = 'PDF';

switch ($tipo)
{
    case 'PDF':
        print 'arquivo PDF';
        break;
    case 'DOC':
        print 'arquivo DOC';
        break;
    default:
        print 'arquivo default';
}
*/

$lista = ['laranja', 'banana', 'maçã', 'pera', 'melancia'];

foreach ($lista as $fruta)
{
    print $fruta . ' ';
}

