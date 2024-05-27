<?php

/*
//ler um arquivo
$handler = fopen('teste.txt', 'r');

while (!feof($handler))
{
    print fgets($handler, 4096);
    print "<br>";
}
fclose($handler);
*/

//escrita e arquivo
/*
$handler = fopen('teste2.txt', 'w');
fwrite($handler, 'Linha 1' . PHP_EOL);
fwrite($handler, 'Linha 2' . PHP_EOL);
fwrite($handler, 'Linha 3' . PHP_EOL);
fclose($handler);
*/

//print file_get_contents('teste.txt');
//print file_put_contents('teste3.txt', "a \nb \nc");

/*
$arquivo = file('teste.txt');
foreach($arquivo as $linha)
{
    print $linha . '<br>';
}
*/

//copy('teste.txt', 'teste_novo.txt' );

//rename('teste_novo.txt', 'teste_novo2.txt');

//unlink('teste_novo2.txt');

/*
if (file_exists('teste.txt'))
{
    echo 'Arquivo teste.txt existe';
} 
else
{
    echo 'Arquivos nao existe';
}
*/

//mkdir('teste_dir', 0777);
//rmdir('teste_dir');

/*
$arquivos = scandir('c:/xampp/htdocs/teste');
foreach ($arquivos as $arquivo)
{
    print $arquivo . '<br>';
}
*/