<?php


    class Humano{
        public $idade = 29;

        public function falar(){
            echo "<br>Olá Mundo<br>";
        }

        private function gritar(){ ///metodo private nao permite que classes filhas acessem 
            echo "<br>AE CARAIOOOOOO<br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }


        protected function falarBaixo(){
            echo "<br>fala baixinhooo<br>";
        }

        public function acessarFalarBaixo(){
            $this-> falarBaixo();
        }
            

    }

    ///instanciando objeto Humano

    $p1 = new Humano;

    echo "Agora a pessoa 1 ira utilizar os metodos falar e gritar: <br>";

    $p1-> falar();
    $p1-> acessarGritar();

    class Programador extends Humano{ ///extends serve para dizer qual é a classe pai da nova classe criada - essa nova classe herda todos metodos da classe pai

    }

    $luiz = new Programador;

    echo "<br>Agora o objeto da classe Programador que herda da classe Humano vai utilizar os métodos falar e gritar e acessar o atributo idade : <br>";

    $luiz->falar();
    
    echo $luiz->idade;

    $luiz->acessarGritar();

    // $luiz->gritar();  nao é possível acessar um metodo private pela classe filha 

    echo "<br>Utilizando função falar baixo com objeto classe humano e classe programador";

    $p1->falarBaixo();

    $luiz->acessarFalarBaixo();
