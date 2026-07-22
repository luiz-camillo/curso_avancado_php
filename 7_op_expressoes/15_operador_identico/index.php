<?php

    $a = 5;
    $b = 5;
    $c = "5";


    echo "Variável A = " . $a . " do tipo " . gettype($a) . "<br>";
    
    echo "Variável B = " . $b . " do tipo " . gettype($b) . "<br>";
    
    echo "Variável C = " . $c . " do tipo " . gettype($c) . "<br>";

    if($a == $c){
        echo "Variável A é igual a Variável C" . "<br>";
    }

    if($a === $c){
        echo "Variável A é idêntica a Variável C" . "<br>";
    } else {
        echo "Variável A não é idêntica a Variável C" . "<br>";
    }