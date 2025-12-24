<?php


class Pessoa{

  function falar(){
    echo "Olá Pessoal";
  }
}

$luiz = new Pessoa();

$luiz->nome = "Luiz";

echo $luiz->nome;

echo"<br>";

$luiz->falar();