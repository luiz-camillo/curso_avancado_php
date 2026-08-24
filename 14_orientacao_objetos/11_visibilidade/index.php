<?php

    //temos 3 tipos de visibilidade (public, protected e private) dizendo quem e como vai alterar a propriedade do objeto


    //public é default pode ser acessada por fora do escopo 

    //protected acessado apenas pela classe de origem ou as que recebem a mesma herança

    //private propriedade só pode ser acessada pela classe que foi criada


    //esses encapsulamentos valem tanto para propriedades quanto para metodoso
    
    
    class Carro{

        public $aro = 16;
        private $vidro = "Sem película";

        public function peliculaDeFabrica($p){
            $this->vidro = $p;
        }
        public function getVidro(){
            return $this->vidro;
        
        }

        public function setVidro($obj,$p){
            $obj->vidro = $p;
        }
    }

    class Mecanico{

        public function alterarAro($obj, $r){
             $obj->aro = $r;
        }

        public function setVidro($p){
            $this->vidro = $p;
        }
    }

    $carro1 = new Carro;

    echo $carro1->aro;
    echo "<br>";

    $luiz = new Mecanico;

    $luiz->alterarAro($carro1, 20);

    echo $carro1->aro;
    echo "<br>";

    
    // nao pode alterar pq a propriedade do objeto carro1 da classe Carro é privada 
    //$luiz->colocarPelicula($carro1, "G45");

    //nao posso nem acessar a propriedade 
    //echo $carro1->vidro;
    
    echo $carro1->getVidro();
    echo "<br>";

    $carro1->setVidro($carro1, "PRF ME PEGOU, NAO DA PRA POR G50");

    echo $carro1->getVidro();
    echo "<br>";

