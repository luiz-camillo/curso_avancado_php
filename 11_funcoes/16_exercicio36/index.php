<?php

    function countVowels($a){
        $s = 0;
        $a = strtolower($a);
        for($i=0; $i< strlen($a); $i++){
            if($a[$i] == "a" || $a[$i] == "e" || $a[$i] == "i" || $a[$i] == "o" || $a[$i] == "u"){
                $s+= 1;
                
            }
        }
        
        return "A string: $a possui $s vogais";
    }


    echo countVowels("Luiz");

