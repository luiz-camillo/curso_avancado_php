<?php


    class Cachorro {

        public $raca;
        public $cor;
        public $idade;

        function __construct($raca, $cor, $idade){
            $this->raca = $raca;
            $this->cor = $cor;
            $this->idade = $idade;
        }

        public function showPropriedades(){
            echo "As propriedades declaradas nesse objeto são: raça: $this->raca, cor: $this->cor e idade: $this->idade";
        }
    }



    $rolico = new Cachorro("Jaguara", "Branco e Preto", 11);

    $rolico->showPropriedades();