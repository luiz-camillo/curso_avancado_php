<?php


    $arr = range(0,20);

    $slice1 = array_slice($arr, 4, -16); // se vc omitir o indice final ele vai ate o final do array, pode utilizar indice negativo tbm

    print_r($slice1);

    echo "<br><br>";

    $arr2 = ["Index 0", "Index 1", "Index 2", "Index 3", "Index 4", "Index 5", "Index 6"];

    $slice2 = array_slice($arr2, 1, 3);

    print_r($slice2);