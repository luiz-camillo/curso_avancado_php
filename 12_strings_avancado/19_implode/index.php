<?php

    //transformando array para string

    $arr1 = ["Maça", "Pera", "Batata"];

    $str1 = implode(" , , ", $arr1);
    

    echo $str1 . "<br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    $str2 = implode(" <-> ", $arr2);

    echo $str2;