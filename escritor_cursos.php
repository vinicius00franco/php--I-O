<?php

// $arquivo = fopen('lista-cursos.txt','a');

 $curso = "\n" . 'Design Patterns 2';

// $cursos = fwrite($arquivo,$curso,21);

// fclose($arquivo);



// facilidade 

$cursos = file_put_contents('lista-cursos.txt',$curso, FILE_APPEND);

