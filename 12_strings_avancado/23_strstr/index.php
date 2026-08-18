<?php

    $str = "Olá mundo, hoje é terça feira, que semaninha que não termina mais";


    $palavra = strstr($str, "hoje");

    echo $palavra . "<br>";

    $s = "semaninha";

    $palavra1 = strstr($str, $s);

    echo $palavra1;