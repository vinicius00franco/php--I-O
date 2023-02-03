<?php

// $teclado = fopen('php://stdin','r');

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos.txt',"$novoCurso", FILE_APPEND);

// para eveitar add uma quebra de linha
// add um trim(fegts($teclado))

// Constante STDIN --> fopen('php://stdin','r');