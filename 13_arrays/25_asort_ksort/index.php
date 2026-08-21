<?php

    //para ordenar em ordem crescente pelo valor das chaves usamos arsort
    //para ordenar em ordem crescente pelo valor das keys usamos ksort

    $pessoas = [
        'Luiz' => 29,
        'João' => 25,
        'Rafael' => 12,
        'Eduarda' => 28
    ];


    asort($pessoas);
    print_r($pessoa);
    echo "<br>";