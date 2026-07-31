<?php


    $a = 10;

    while($a > 0){
        

        if($a === 5 || $a === 7){

            echo "Pulou a execução $a <br>";
            
            $a--;

            continue;

        }

        echo "Loop normal $a <br>";
        $a--;
    }