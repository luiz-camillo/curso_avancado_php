<?php

    $x = 4;

    while($x <= 30){
        echo $x . "<br>";

        if($x === 24){
            echo "O X é $x, saindo do loop";
            break;
        }

        $x+=2;
    }