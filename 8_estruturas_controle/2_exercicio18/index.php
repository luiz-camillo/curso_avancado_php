<?php

    if( 5 > 2){
        echo "Condição verdadeira <br>";
    } else {
        echo "Condição falsa <br>";
    }


    if( "Matheus" != "Paulo" ){
        echo "Segunda condição verdadeira <br>";
    } else {
        echo "Segunda condição falsa <br>";
    }

    if( 12 <= 11 ){
        echo "Terceira condição verdadeira <br>";
    } else {
        echo "Terceira condição falsa <br>";
    }

    //agora com variaveis 

    $a = 5;
    $b = 2;

    
    if( $a > $b){
        echo "Condição verdadeira (variável) <br>";
    } else {
        echo "Condição falsa (variável) <br>";
    }


    $nome1 = "Matheus";
    $nome2 = "Paulo";

    if( $nome1 != $nome2 ){
        echo "Segunda condição verdadeira (variável) <br>";
    } else {
        echo "Segunda condição falsa (variável) <br>";
    }


    $c = 12;
    $d = 11;

    if( $c <= $d ){
        echo "Terceira condição verdadeira (variável) <br>";
    } else {
        echo "Terceira condição falsa (variável) <br>";
    }