<?php
    //condicao True
    if( 5 > 2 ){
        echo "Deu certo, entrou no if <br>";
    }

    // condicao False
    if( 2 >= 5){
        echo "Não vai entrar no if <br>";
    }

    //utilizando operador logico
    if(10 === 10 && 9 > 3){
        echo "Deu certo entrou no if (2) <br>";
    }

    //utilizando variaveis

    $a = 10;
    $b = 5;

    $c = "Deu certo entrou no if (3)";

    if($a >= $b){
        echo $c;
    }