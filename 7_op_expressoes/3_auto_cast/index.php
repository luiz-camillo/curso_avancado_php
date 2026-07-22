<?php


    echo 5 / 2;
    echo "<br>";

    echo gettype(5 / 2);

     if (is_float(5 / 2)) {
        echo "<br> O resultado é um float";
     }

    echo "<br>";
    echo 2 . 3;
    echo "<br>";
    

    $nome = "Luiz";
    $sobrenome = "Miranda";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";
    echo(gettype($nomeCompleto));