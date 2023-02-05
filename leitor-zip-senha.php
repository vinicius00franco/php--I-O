<?php

// ler zip com senha por passando o password por meio do contexto 

$context = stream_context_create([
    'zip' => [
        'password' => 'vinicius'
    ]
    ]);

    // posso passar a todos os streams um contexto 



echo file_get_contents('zip://projeto.zip#lista-cursos.txt',false, $context); 