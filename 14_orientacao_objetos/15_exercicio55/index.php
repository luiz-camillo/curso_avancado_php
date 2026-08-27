<?php

    class Humano{
        
        private $idade; 
        private $sexo;

        public function setIdade(int $i): void{
            $this->idade = $i;
        }

        public function setSexo(string $s): void{
            $this->sexo = $s;
        }

        public function getIdade(): int{
            return $this->idade;
        }

        public function getSexo(): string{
            return $this->sexo;
        }
    }


    class Professor extends Humano{

        private $statusAula = false;
        private $correcaoProva = false;

        public function setStatusAula(bool $s): void{
         
            $this->statusAula = $s;

        }

        public function setCorrecaoProva(bool $t): void{

            $this->correcaoProva = $t; 

        }

        public function getStatusAula(): string{
            if($this->statusAula == true){
                return "Aula iniciada em andamento";
            } else {
                return "Aula ainda não iniciada";
            }
        }

        public function getStatusCorrecaoProva(): string{
            if($this->correcaoProva == true){
                return "Estou corrigindo as provas";
            } else{
                return "Não estou corrigindo nenhuma prova";
            }
        }

    }

    echo "Criei duas classes, classe Humano e classe Professor que herda de humano <br>";

    echo "Agora vou instanciar um novo Professor e utilizar todos os métodos e imprimir os atributos: <br>";

    $luiz = new Professor;


    echo "<br> Setando atributos na instancia: <br><br>";

    $luiz->setIdade(29);
    $luiz->setSexo("Masculino") ;

    echo "Imprimindo idade e sexo utilizando métodos get da classe pai: <br>";

    echo "Eu possuo " . $luiz->getIdade() . " anos de idade";

    echo "<br>";

    echo "Sou do sexo ". $luiz->getSexo() . "<br>";

    echo "<br>Vamos usar as funções da classe filha, agora para entender qual o status das aulas e status das correções das provas ainda sem alterar nada<br>";


    echo $luiz->getStatusAula();

    echo "<br>";

    echo $luiz->getStatusCorrecaoProva();

    $luiz->setStatusAula(true);
    $luiz->setCorrecaoProva(true);

    echo "<br><br>Alterei o status da aula e da correção de prova para true, vamos ver como ficam os retornos com os getters<br>";

    echo $luiz->getStatusAula();

    echo "<br>";

    echo $luiz->getStatusCorrecaoProva();

    echo "<br>";

    echo "<br>";

    if($luiz instanceof Professor) {
        echo "Luiz é Professor";
    }
