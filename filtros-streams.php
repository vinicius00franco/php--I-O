<?php

$arquivos = fopen('lista-cursos.txt','r');

stream_filter_append($arquivos,'consumed');

echo fread($arquivos,filesize('lista-cursos.txt'));