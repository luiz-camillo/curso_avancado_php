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

// o python me ajudou bastante em conseguir acompanhar esse conteúdo com rapidez, orientação a objetos é complexo porém basta prestar atenção e entender as nomenclaturas 
/*Uma classe é basicamente o molde do objeto, um objeto é criado a partir de uma classe como por exemplo classe animal, que possui métodos e propriedades, essas propriedades podem ser, public, private, protected, classes filhas podem ser criadas a partir das classes pai, herdando características, por exemplo obrigar a classe filha a implementar um método ou atributo. Podemos ter a classe pai Animal{}, essa possui o método emitir som com o parametro "Som" que cada animal vai ter o seu, entao eu posso criar uma classe cachorro por exemplo que vai herdar o método emitirSom($som) e vai implementar o método na classe junto com as peculiaridades da classe cachorro*/ 