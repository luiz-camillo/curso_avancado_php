<?php

     class Humano{
        public $idade;
        public $nome;
        public $profissao;

    }

    class Cachorro{

        public function Latir(){
            echo "Au Au";
        }
    }

    if(class_exists("Humano")){
        echo "A classe Humano existe <br>";
    }

    
    if(class_exists("Cachorro")){
        echo "A classe Cachorro existe <br>";
    } else {
        echo "A classe Cachorro não existe <br>";
    }

    echo "<br>";

    print_r(get_class_vars("Humano"));

    echo "<br>";

    print_r(get_class_methods("Cachorro"));