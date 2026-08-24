<?php

    // função recebe indeterminados arrays e retorna aquilo que nao se repete, que sao as diferenças entre os arrays

    $arr1 = [1,2,3,4];
    $arr2 = [1,2,3];
    $arr3 = [1,2];


    $arrayDiff = array_diff($arr1, $arr2, $arr3);

    print_r($arrayDiff);

    //array dif retorna a diferença do primeiro array para os demais por exemplo

    /*o array tem 1 , 2, 3, 4 e no segundo array tem 123 entao ai só sobra o 4 pq no array 3 só tem 1 e 2 que ja foram removidos ,  */