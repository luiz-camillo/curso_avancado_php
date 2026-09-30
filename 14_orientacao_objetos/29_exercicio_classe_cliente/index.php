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


    $luiz = new Cliente($username, $age, $email, 'Akks666!23d', true);

    echo 'Utilizando as funções get, logo abaixo irei expor os dados do objeto que acabei de criar: <br>';

    echo '<br>';

    echo 'O nome de usuário é: ' . $luiz->getUserName() . '<br>';

    echo 'A idade é: ' . $luiz->getAge() . '<br>';
    
    echo 'O email é: ' . $luiz->getEmail() . '<br>';

    echo 'A senha é: ' . $luiz->getPass() . '<br>';

    echo 'O nível de acesso do usuário é: ';
    
    $luiz->nivelAcesso();

    echo '<br><br>';

    echo 'Agora irei utilizar os métodos setters que criei para alterar os dados do objeto e expor novamente os dados com as alterações';

    // salvando dados em variáveis antes de alterar para ficar mais facil de manipular

    $luizName = $luiz->getUserName();
    $luizAge = $luiz->getAge();
    $luizEmail = $luiz->getEmail();
    $luizPass = $luiz->getPass();
    $luizAcess = $luiz->getAcess();

    echo "<br>Estou trocando os dados do usuario $luizName que tem $luizAge anos, utiliza o e-mail $luizEmail e a senha $luizPass, atualmente ele tem o nível de acesso de " . ($luiz->getAcess() ? 'admin' : 'comprador');


    $luiz->setUserName('RAFAEL');
    $luiz->setAge(25);
    $luiz->setEmail('rafadeles@dev.us');
    $luiz->setPass('scADEL566A12');
    $luiz->setAcess(false);   

    echo '<br>';

    $luizName = $luiz->getUserName();
    $luizAge = $luiz->getAge();
    $luizEmail = $luiz->getEmail();
    $luizPass = $luiz->getPass();
    $luizAcess = $luiz->getAcess();

    echo "<br>Agora os  dados do usuario mudaram para <br> Username: $luizName que tem $luizAge anos, utiliza o e-mail $luizEmail e a senha $luizPass, atualmente ele tem o nível de acesso de " . ($luiz->getAcess() ? 'admin' : 'comprador');
