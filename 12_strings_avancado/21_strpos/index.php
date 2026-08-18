<?php

    //encontra a primeira occorencia do parametro que iremos passar vai retornar o indice da palavra ou false


    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");

    echo $testeEncontrar . "<br>";

    $palavra = "com";

    $testeEncontrar1 = strpos($str, $palavra);

    echo $testeEncontrar1 . "<br>";
