<?php

    //função array_merge aceita numero indeterminado de arrays

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40 ,90];
    $arr3 = [2.1, "macaco", True];


    $arr4 = array_merge($arr1, $arr2, $arr3);

   print_r($arr4);

