<?php


    class Pessoa{
        public $nome = "Luiz";
        public $idade = 29;

        function andar($m){
            echo "A pessoa chamada $this->nome andou $m metros<br>"; //para usar o valor da propriedade do objeto dentra do proprio metodo é preciso usar $this na declaração - $this representa o objeto atual
        }
    }

    $p1 = new Pessoa;

    $p1->andar(5000);

    $p1->nome = "Duda";

    echo "<br>";
    
    $p1->andar(500000);

    echo "<br>";
    
    $p2 = new Pessoa;

    $p2->nome = "Marcos";
    $p2->idade = 39;

    $p2->andar(900);
    

