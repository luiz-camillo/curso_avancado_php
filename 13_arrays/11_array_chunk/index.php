<?php


    $arr1 = range(1,50);

    print_r(array_chunk($arr1, 10));

    $arrDivided = array_chunk($arr1, 25);

    echo "<br><br>";

    print_r($arrDivided);