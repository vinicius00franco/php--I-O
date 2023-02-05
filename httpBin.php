<?php

// pegar não somentes elementos de url, mas utilizar metodos de requisição 

// utilizar context dentro das requisições
// 
$context = stream_context_create([
    
    // 'http' => [
    //     'method' => 'DELETE',
    //     // header enviado pela requisição
    //     // na saída, verificar se esta mostrando o seu envio 
    //     'header' => 'X-From: PHP'
    // ]

    // ]);
    'http' => [
        'method' => 'POST',
        // header enviado pela requisição dizendo que é um arquivo php
        // na saída, verificar se esta mostrando o seu envio 
        'header' => "X-From: PHP\r\n" . 
                    'Context_Type: text/plain',
        'content' => 'Teste do corpo',
    ]

    ]);

// os métodos devem ser o mesmo
// get --> get ou delete --> delete 
echo file_get_contents('http://httpbin.org/post', false, $context);

