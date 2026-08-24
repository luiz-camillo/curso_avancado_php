<?php

    function encontrarPares($arr){
        $arrPares = [];
        for($i=0; $i < count($arr); $i++){
            if($arr[$i] % 2 == 0){
                array_push($arrPares, $arr[$i]);
            }
        }
    }


    // fazendo com foreach


    function foundEven($arr){
        $arrParess = [];
        foreach($arr as $n){
            if($n % 2 == 0){
                array_push($arrPares, $n);
            }
        }
        return $arrPares;
    }