<?php
    $arr1 = [10,1,9,12,15,6,7,19,21,55,35];

    //irei testar funções de ordenação para arrays começando com sort e depois rsort

    echo "Imprimindo array antes de ordenar:";
    print_r($arr1);

    echo "<br><br>Ordenando array......";

    sort($arr1);

    echo "<br><br>Imprimindo array ordenado:";
    print_r($arr1);

    echo "<br><br>Ordenando array ao contrário ......";

    rsort($arr1);

    echo "<br><br>Imprimindo array ordenado ao contrário:";
    print_r($arr1);


