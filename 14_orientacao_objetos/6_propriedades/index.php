<?php           

    class Car {
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "<br>Vrummmmmmm caraio ";
        }

    }


    $ferrari = new Car;

    echo $ferrari->aro;
    echo "<br>";
    echo $ferrari->rodas;
    echo "<br>";
    echo "A cor da ferrari é $ferrari->cor, e as rodas são aro $ferrari->aro";
    $ferrari->cor = "Azul";
    echo "<br>";
    echo "A cor da ferrari é $ferrari->cor, e as rodas são aro $ferrari->aro";
    $ferrari->ligar();