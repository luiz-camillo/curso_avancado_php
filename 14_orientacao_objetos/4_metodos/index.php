<?php

    class Pessoa{

        function falar(){
            echo "Olá. Eu sou um objeto <br>";
        }
        
        function somar($x,$y){
            echo $x + $y . "<br>";
        }

    }


    $luiz = new Pessoa;
    $duda = new Pessoa;

    $luiz->falar();
    $duda->falar();

    $luiz->somar(4,4);
    $duda->somar(50,55);