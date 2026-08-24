<?php

    /*Exercício Básico — Sistema de Contas Bancárias

Crie uma classe ContaBancaria com propriedades titular e saldo (protected), e métodos depositar($valor), sacar($valor) e verSaldo(). Depois crie uma classe ContaPoupanca que herda de ContaBancaria e sobrescreve depositar() para aplicar um bônus de 1% sobre o valor depositado.

Teste esperado:

php
$conta = new ContaPoupanca("Luiz");
$conta->depositar(100);
echo $conta->verSaldo(); // esperado: 101 */

  