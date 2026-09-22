<?php

    // interfaces prrecisam ser implementadas

    // se implementar uma interface para criar uma classe obrigatoriamente precisa implementar suas propriedades e métodos

    interface Caracteristicas {

        const nome = "Luiz";

        public function falar(
        );
    }

    class Humano implements Caracteristicas{

        public $idade= 29;

        public function falar(){
            echo "Olá, sou um humano";
        }

        public function dizerNome(){
            echo "Meu nome é: ",  self::nome;
        }

    }

    $luiz = new Humano;

    $luiz->falar();
    
    echo "<br>";

    $luiz->dizerNome();

