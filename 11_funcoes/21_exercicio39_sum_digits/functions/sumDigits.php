<?php
    
    function sumDigits($x){
        $x = strval($x);
        $numStr = str_split($x);
        
        $numArr = [];
        for($i = 0; $i < count($numStr); $i++){
            array_push($numArr, $numStr[$i]);
            $numArr[$i] = intval($numArr[$i]);
        }
        
        $soma = 0;
        
        for($j = 0; $j< count($numArr); $j++){
            $soma+=$numArr[$j];
        }
        
        return $soma;
    }


