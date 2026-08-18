<?php


    $str1 = "Testando encontro da palavra teste em uma string que tem teste";

    $palavra = strrpos($str1, "teste");

    echo $palavra . "<br>";

    $palavra2 = strpos($str1, "teste");

    echo $palavra2 . "<br>";

    if(strrpos($str1, "Java") === false){
        echo "Palavra não foi localizada";
    } 

    