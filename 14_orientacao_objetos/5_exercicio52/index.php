<?php

    class Cachorro{
        
        function latir(){
            echo "Au Au <br>";
        }

        function andar($m){
            echo "O cachorro andou $m metros <br>";
        }
    }


    $poodle = new Cachorro;
    $shitzu = new Cachorro;

    $poodle->latir();
    $shitzu->latir();
    $poodle->andar(120);
    $shitzu->andar(5000);