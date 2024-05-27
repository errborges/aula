<?php

$nome = 'Edson';
$sobrenome = ' Borges';

//$nome_completo = $nome . $sobrenome;
//echo $nome_completo;

//var_dump( $nome . $sobrenome );
//var_dump( "{$nome} {$sobrenome}");

//print "Edson Borges 'R'";
//print 'Edson Borges "R"';
//print "Edson Borges \"R\"";

print strtoupper($nome . $sobrenome);
echo '<br>';
print strtolower($nome . $sobrenome);
echo '<br>';
print strlen($nome);
echo '<br>';
print substr($sobrenome, 2, 3);
echo '<br>';
print substr($nome, 0, 5);
echo '<br>';
print substr($nome, -3);
echo '<br>';
print str_replace('e', 'o', $nome . $sobrenome);
echo '<br>';