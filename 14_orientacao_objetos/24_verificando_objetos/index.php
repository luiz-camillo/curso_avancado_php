<?php

    class Humano{
        public function falar(){
            echo "Olá";
        }
    }

    $luiz = new Humano;

    $teste = 10;

    if (is_object($luiz)){
        echo 'A variável $luiz, é um objeto <br>';
    } else {
        echo 'A variável $luiz, não é um objeto <br>';
    }


    if (is_object($teste)){
        echo 'A variável $teste, é um objeto <br>';
    } else {
        echo 'A variável $teste, não é um objeto <br>';
    }

    echo '<br>';

    echo get_class($luiz) . '<br>';

    echo '<br>';

    if(method_exists($luiz, 'falar')){
        echo 'O método existe <br>';
    } else {
        echo 'O método não existe <br>';
    }   

    echo '<br>';

    if(method_exists($luiz, 'mover')){
        echo 'O método existe <br>';
    } else {
        echo 'O método não existe';
    }


    