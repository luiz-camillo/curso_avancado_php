<?php

    //classes nao podem ser instanciadas (nao pode criar métodos a partir dela)

    // utilizando como herança implementando obrigatoriamente na classe filha


    abstract class Teste{

        public static function testandoClasse(){
            echo "Este método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs(); 
    }

    Teste::testandoClasse();

    class Nova extends Teste{

        public function TesteAbs(){
            echo "Teste abs (método abstrato da classe abstrata sendo implementado)";
        }
    }

    $j = new Nova;

    $j -> testeAbs();
