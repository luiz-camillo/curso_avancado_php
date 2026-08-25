<?php

    /*Exercício Básico — Sistema de Contas Bancárias

Crie uma classe ContaBancaria com propriedades titular e saldo (protected), e métodos depositar($valor), sacar($valor) e getSaldo(). Depois crie uma classe ContaPoupanca que herda de ContaBancaria e sobrescreve depositar() para aplicar um bônus de 1% sobre o valor depositado.

Teste esperado:

php
$conta = new ContaPoupanca("Luiz");
$conta->depositar(100);
echo $conta->verSaldo(); // esperado: 101 */


class ContaBancaria{

    protected string $titular;
    protected float $saldo = 0;

    function __construct(string $titular){
        $this->titular = $titular;
    }

    function depositar(float $valor): void {
        $this->saldo+=$valor;   
    }

    function sacar(float $valor): void {
        if($this->saldo < $valor){
            echo "<br>Saldo Insuficiente<br>";
            return;
        }
        $this->saldo-=$valor;   
    }

    function getSaldo(): float {
     return $this->saldo;   
    }
}

class ContaPoupanca extends ContaBancaria{
    function depositar (float $valor): void{
        $bonus = $valor * 0.01;
        $valorFinal = $bonus + $valor;
        parent::depositar($valorFinal);
    }
}

$conta = new ContaPoupanca("Luiz");
echo $conta->getSaldo();

echo "<br>Vou depositar usando o método depositar<br>";

echo"Depositando.....<br>";

$conta->depositar(151);

echo"Novo saldo é: ";

echo $conta->getSaldo();

echo "<br>Agora vou sacar uma grana<br>";

$conta->sacar(200);

echo "<br>Não tenho saldo vou sacar menos então<br>";

$conta->sacar(150);

echo "Novo saldo agora é " . $conta->getSaldo();
