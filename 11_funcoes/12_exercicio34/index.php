<?php

    function sumEvenNumbers($x){
        $s = 0;
        for($i=0; $i <= $x; $i++){
            if($i % 2 == 0){
                $s+= $i**2;
            }            
        }
        
        return $s;
    }

    echo sumEvenNumbers(322022222) . "<br>";
    
   