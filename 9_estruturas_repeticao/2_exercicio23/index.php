<?php



    $lista = ["Banana", 1, True, False, "Tesouro", 10.5, 7, 666, "Barcola", 1.2];


    $x = count($lista);
    $i = 0;

    while($i < $x){
        if(is_string($lista[$i])){
            echo $lista[$i] . "<br>";
        }

        $i++;
    }

    echo "<br>";

    $y = count($lista);
    $f = 0;

    while($f < $y){
        echo gettype($lista[$f]) . "<br>";
        $f++;
    }