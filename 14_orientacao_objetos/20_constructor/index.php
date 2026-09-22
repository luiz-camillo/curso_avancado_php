<?php


    class Car {

        public $portas;
        public $cor;
        public $marca;

        function __construct ($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }


    $carro1 = new Car(2, "Azul", "Volkswagen");

    echo "O carro é da marca $carro1->marca, é da cor $carro1->cor e tem $carro1->portas portas";

