<?php

//sintaxe original ou convencional do PHP
//$cores = array('vermelho', 'verde', 'amarelo');

// sintaxe mais recente logica e enxuta
//$cores = ['vermelho', 'verde', 'amarelo'];

/*
echo '<pre>';
print $cores[0];
echo '<br>';
print $cores[1];
echo '<br>';
var_dump($cores);
echo '</pre>';
*/


//adiciona em um vetor
/*
$cores = [];
$cores[] = 'vermelho';
$cores[] = 'verde';
$cores[] = 'amarelo';
*/
//var_dump($cores);

/*
$cores = [];
$cores[1] = 'vermelho';
$cores[3] = 'verde';
$cores[5] = 'amarelo';

var_dump($cores);
print $cores[3];
*/

/*
$pessoa = [];
$pessoa['nome'] = 'Edson';
$pessoa['endereco'] = 'Rua tal';
$pessoa['nascimento'] = '1990-01-20';
$pessoa['cidade'] = 'Criciúma';

foreach ($pessoa as $chave => $informacao)
{
    print $chave . ': '. $informacao . '<br>';
}

/*
print $pessoa['nascimento'];
echo '<pre>';
var_dump($pessoa);
echo '</pre>';
*/

/*
$carros =   [   'palio' =>  [ 'cor' => 'azul',
                              'marca' => 'fiat',
                              'ano' => 2008],
                'corsa' =>  [ 'cor' => 'prata',
                              'marca' => 'GM',
                              'ano' => 2005],
                'gol'   =>  [ 'cor' => 'preto',
                              'marca' => 'VW',
                              'ano' => 2010]
            ];

//var_dump($carros);
//print $carros['palio']['cor'];

foreach ( $carros as $modelo => $informacao)
{
    print $modelo . '<br>';
    foreach ($informacao as $atributo => $valor) 
    {
        print $atributo . ': ' . $valor . '<br>';
    }
    echo '<br>';
}
*/

//$cores = ['vermelho', 'verde', 'amarelo'];
//$cores[] = 'ciano'; // inclui um elemento na ultima posição do array
//array_push($cores, 'ciano'); // inclui um elemento na ultima posição do array
//array_unshift($cores, 'ciano'); //inclui um elemento na primeira posição do array
//array_shift($cores); // remove um elemento da primeira posição do array
//array_pop($cores); // remove um elemento da ultima posição do array

//$cores = array_reverse($cores); //inverte os elementos dentro do array

//var_dump($cores);
//$resultado = array_merge($cores, ['preto']);
//var_dump($resultado);

//$carros = [];
//$carros[10001] = 'Palio 2002';
//$carros[73933] = 'Corsa 2003';
//$carros[82634] = 'Celta 2005';
//$carros[12838] = 'Uno 1999';

//sort($carros);
//asort($carros);
//ksort($carros);


//echo '<pre>';
//var_dump(array_keys($carros));
//var_dump(array_values($carros));

//var_dump(count($carros));
//var_dump(in_array('Uno 1999', $carros));

//$data = '2013-10-20';
//$parte = explode('-', $data);
//print $parte[0];

$partes = ['2023', '10', '20'];
print implode('-', $partes);