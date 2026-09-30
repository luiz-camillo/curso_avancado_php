<?php

    //criando uma classe Cliente para testar conhecimentos em orientação a objetos



    class User{

        private string $username;
        private int $age;
        private string $email;
        private string $pass;
        protected bool $acess;

        public function __construct($username, $age, $email, $pass, $acess){
            $this->username = mb_strtolower($username);
            $this->age = $age;
            $this->email = mb_strtolower($email);
            $this->pass = $pass;
            $this->acess = $acess;
        }

        public function getUserName(){
            return $this->username;
        }

        public function getAge(){
            return $this->age;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPass(){
            return $this->pass;
        }

        public function getAcess(){
            return $this->acess;
        }

        public function setUserName(string $username): void{
            $this->username = mb_strtolower($username);
        }

        public function setAge(int $age): void{
            $this->age = $age;
        } 

        public function setEmail(string $email): void{
            $this->email = mb_strtolower($email);
        }

        public function setPass(string $pass): void{
            $this->pass = $pass;
        }

        public function setAcess(bool $acess): void{
            $this->acess = $acess;
        }
    
    }

    class Cliente extends User{

        public function nivelAcesso(){
            if($this->acess){
                echo 'Usuário com acesso de administrador';
            } else{
                echo 'Usuário sem acesso de administrador';
            }           
        }
    }

    $username = 'LZCFR';
    $age = 29;
    $email = 'lzc1@dev.br';


    $cliente1 = new Cliente($username, $age, $email, 'Akks666!23d', true);

    echo 'Utilizando as funções get, logo abaixo irei expor os dados do objeto que acabei de criar: <br>';

    echo '<br>';

    echo 'O nome de usuário é: ' . $cliente1->getUserName() . '<br>';

    echo 'A idade é: ' . $cliente1->getAge() . '<br>';
    
    echo 'O email é: ' . $cliente1->getEmail() . '<br>';

    echo 'A senha é: ' . $cliente1->getPass() . '<br>';

    echo 'O nível de acesso do usuário é: ';
    
    $cliente1->nivelAcesso();

    echo '<br><br>';

    echo 'Agora irei utilizar os métodos setters que criei para alterar os dados do objeto e expor novamente os dados com as alterações';

    // salvando dados em variáveis antes de alterar para ficar mais facil de manipular

    $cliente1Name = $cliente1->getUserName();
    $cliente1Age = $cliente1->getAge();
    $cliente1Email = $cliente1->getEmail();
    $cliente1Pass = $cliente1->getPass();
    $cliente1Acess = $cliente1->getAcess();

    echo "<br>Estou trocando os dados do usuario $cliente1Name que tem $cliente1Age anos, utiliza o e-mail $cliente1Email e a senha $cliente1Pass, atualmente ele tem o nível de acesso de " . ($cliente1->getAcess() ? 'admin' : 'comprador');


    $cliente1->setUserName('RAFAEL');
    $cliente1->setAge(25);
    $cliente1->setEmail('rafadeles@dev.us');
    $cliente1->setPass('scADEL566A12');
    $cliente1->setAcess(false);   

    echo '<br>';

    $cliente1Name = $cliente1->getUserName();
    $cliente1Age = $cliente1->getAge();
    $cliente1Email = $cliente1->getEmail();
    $cliente1Pass = $cliente1->getPass();
    $cliente1Acess = $cliente1->getAcess();

    echo "<br>Agora os  dados do usuario mudaram para <br> Username: $cliente1Name que tem $cliente1Age anos, utiliza o e-mail $cliente1Email e a senha $cliente1Pass, atualmente ele tem o nível de acesso de " . ($cliente1->getAcess() ? 'admin' : 'comprador');
