<?php


    $pessoa1 = [
        'nome' => 'Luiz',
        'idade' => 29,
        'profissao' => 'programador'
    ];

    $pessoa2 = [
        'nome' => 'Benício',
        'idade' => '11 meses',
        'profissao' => 'bebezinho do pai'
    ];

    foreach($pessoa1 as $dadosP => $valorP){
        echo "$dadosP => $valorP <br>";
    };

    echo "<br>";

    foreach($pessoa2 as $dadosP => $valorP){
        echo "$dadosP => $valorP <br>";
    };
