<?php


    function multi(){

        $a = 2;
        $b = 5;
        $c = 9;

        return $a * $b * $c;
    }


    echo multi();

    echo "<br>";

    function multi2(){

        $d = 9;
        $e = 4.5;
        $g = 15;

        $resultado = $d * $e * $g;

        echo $resultado;
    }

    multi2();