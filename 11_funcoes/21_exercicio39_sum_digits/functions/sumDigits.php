<?php
    
    function sumDigits($x){
        $x = strval($x);
        $numStr = str_split($x);
        
        
        for($i = 0; $i < count($numStr); $i++){
            $numStr[$i] = intval($numStr[$i]);
        }
        
        $soma = array_sum($numStr);
        
        return $soma;
    }


