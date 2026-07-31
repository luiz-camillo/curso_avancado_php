<?php

    $arr = [];

    for($i=10; $i<=100; $i+=10){
        array_push($arr, $i);
    }


    $x = $arr[0];

    while($x<=100){

        if($x == 30 || $x == 40){
            echo "Pulando execução, X é $x <br>";
            $x+=10;
            continue;

            
        }
        echo "O valor de X é $x <br>";


        $x+=10;
    }


    //outra forma do mesmo código 

    $arr2 = [];

    for($i=10; $i<=100; $i+=10){
        array_push($arr2, $i);
    }


    $i = 0;

    while($i < count($arr2)){

        $numeroAtual = $arr2[$i];

        if($numeroAtual == 30 || $numeroAtual == 40){
            echo "Pulando execução porque o X vale $numeroAtual <br>";
            $i++;
            continue;
        }

        echo "Elemento: $numeroAtual <br>";

        $i++;
    }
    