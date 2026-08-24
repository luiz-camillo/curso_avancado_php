<?php


    //com this podemos alterar ou acessar propriedades do objeto e tbm invocar metodos





    class Animal{

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;

        }

        function latir(){
            return "<br>Au Au <br>";
        }

        function latirForte(){
            return strtoupper($this->latir()); //aqui usei o this para usar o retorno do método dentro de um novo método
        }

    }


    $rolico = new Animal;

    $rolico->escolherNome("Jambolão");

    echo $rolico->nome;

    echo $rolico->latir();    

    echo "<br>";

    echo $rolico->latirForte();    