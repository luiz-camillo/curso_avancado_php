<?php

function isPrime($x){
    if($x < 2){
        return false;
    }

    $rq = sqrt($x);

    for($i = 2; $i <= $rq; $i++){
        if($x % $i == 0){
            return false;
        }
    }

    return true;
}


$z = 5;

if(isPrime($z)){
    echo "O número $z é primo"; 
} else{
    echo "O número $z não é primo";
}