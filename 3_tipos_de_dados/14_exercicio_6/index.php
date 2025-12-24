<?php


$carros = ["marca" => "audi", "cor" => "azul", "potencia" => "680 cavalos", "turbo" => true, "modelo" => "RS6"];

print_r($carros);

echo "<br>";
echo "Olá me chamo Luiz, tenho um carro da marca ", $carros["marca"], ", modelo ", $carros["modelo"], "! Esse carro possui ", $carros ["potencia"], " cavalos de potência";

echo "<br>";

if ($carros["turbo"]){
  echo "E ainda por cima essa porra é biturbo!!!";
}
