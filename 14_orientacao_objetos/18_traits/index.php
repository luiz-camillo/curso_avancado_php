<?php


    trait Objeto{

        public function teste(){
            echo "Testando trait de objeto";
        }
    }


    trait Testando{
        
        public function testeTraid() {
            echo "Esse método é da trait Testando ";
        }
    }

    class Central{
        use Objeto;
        use Testando;
    }


    $x = new Central;

    $x->teste();

    echo "<br>";

    $x->testeTraid();

