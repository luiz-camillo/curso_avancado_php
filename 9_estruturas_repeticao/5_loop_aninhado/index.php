<?php


$i = 1;

while($i < 10){
    echo "Loop externo $i <br>";

    $j = 10;

    while($j > 5){
        echo "Loop interno $j <br>";


        $y = 1;

        while($y < 5){
            echo "Loop IN IN TERNO $y <br>";

            $y++;
        }
        $j--;
    }
    echo "<br>";
    $i++;
}