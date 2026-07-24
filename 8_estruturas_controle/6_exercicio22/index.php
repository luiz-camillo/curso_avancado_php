<?php


$velo = 80;
$velomax = 40;

if($velo < $velomax){
    echo "Você está na velocidade correta da via <br>";
} elseif ($velo == $velomax){
    echo "Tome cuidado, você está na velocidade limite da via <br>";
} else{
    echo "Você está em velocidade superior a permitida, foi multado! <br>";
}