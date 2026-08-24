<?php

    //valores imutaveis //nomes constantes devem ser maisculos e nao precisam de cifrão na declaração

    class Humano{

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){

        echo self::BRACOS . "<br>"; // aqui nao usamos $this e sim o self

        }
    }


    $luiz = new Humano;

    echo $luiz::OLHOS; /// para acessar a constante precisamos usar a sintaxe de :: e nao mais a -> como é usado nas variáveis 

    echo "<br>";

    $luiz->mostrarConstante();

