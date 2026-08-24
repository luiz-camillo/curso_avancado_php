<?php

    class Carro{
        public $cor = "Azul";
        public $portas = 2;
        public $marca = "BMW";
        public $modelo = "M4";
        public $velocidadeMaxima = 312;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            return $this->velocidadeMaxima;
        }
    }



    $carro1 = new Carro;

    echo "O objeto carro 1 é da classe carro, de cor $carro1->cor, tem $carro1->portas portas, é uma $carro1->marca $carro1->modelo e a velocidade máxima dele é de $carro1->velocidadeMaxima";

    echo "<br>";

    echo "A velocidade máxima é $carro1->velocidadeMaxima <br>";

    echo "Mudando o valor da velocidade máxima.... <br>";

    $carro1->setVelocidadeMaxima(450);

    
    echo "<br>";

    echo "A velocidade máxima é $carro1->velocidadeMaxima <br>";

    echo $carro1->getVelocidadeMaxima();