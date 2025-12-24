<?php

$pessoa = ["olho" => "azul", "nome" => "Luiz", "idade" => 19];




$idade = $pessoa["idade"];
$nome = $pessoa["nome"];
$maioridade = 18;


if($idade >= $maioridade){
  echo "$nome tem $idade anos, e já atingiu a maioridade";
} else {
  echo "$nome tem $idade anos, e ainda não atingiu a maioridade";
}


