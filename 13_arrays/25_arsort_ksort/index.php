<?php

    //para ordenar em ordem crescente pelo valor usamos asort
    
    //para ordenar em ordem decrescente pelo valor usamos arsort
    //para ordenar em ordem crescente pelo valor das keys usamos ksort
    //para ordenar em ordem crescente pelo valor das keys usamos krsort

    $pessoas = [
        'Luiz' => 29,
        'João' => 25,
        'Rafael' => 12,
        'Eduarda' => 28
    ];


    asort($pessoas);
    print_r($pessoas);
    echo "<br>";