<?php

    $arr = range(1,15);

    function soma($a,$b){
        return $a + $b;
    };

    $resultado = array_reduce($arr, "soma");

    echo $resultado . "<br>";

    //para usar array_reduce sempre precisa passar uma função como parametro pq ela é quem 
    //vai dizer o que sera feito com a combinação dos valores 