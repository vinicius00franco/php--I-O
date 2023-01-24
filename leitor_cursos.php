<?php


// $arquivo = fopen('lista-cursos.txt','r');

// // lendo linha a linha 
// // while (!feof($arquivo))
// // {
// //     $curso = fgets($arquivo);
// //     echo $curso;
// // }

// // lendo o arquivo inteiro
// $cursos = fread($arquivo,filesize('lista-cursos.txt'));
// echo $cursos;

// fclose($arquivo);

// pegar somente os conteudos do arquivo

$cursos = file_get_contents('lista-cursos.txt');

echo $cursos .PHP_EOL; 


// pondo cada linha de arquivo em um array()

$cursos1 = file('lista-cursos.txt');

var_dump($cursos1);
