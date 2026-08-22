<?php

    // retornando array em reverso


    $arr = range(1,5);

    print_r($arr);
    echo "<br>";

    $arrRev = array_reverse($arr);

    
    print_r($arrRev);
    echo "<br>";

    $arrP = ["Luiz", "Gessica", "Marina", 5, 50];

    
    print_r($arrP);
    echo "<br>";

    $arrRevP = array_reverse($arrP);

    
    print_r($arrRevP);
    echo "<br>";