


<?php

    $pessoa = new Class(){
        public $nome = "Luiz";
        public function dizerNome(){
            echo "<br>Olá meu nome é $this->nome <br>";
        }
    };



    echo $pessoa->nome;

    $pessoa->dizerNome();

