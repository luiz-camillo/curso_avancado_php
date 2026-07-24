<?php


$a = 12;
$b = 13;
$c = "Tattoo";
$d = "Margos";
$msg = "É maior que 100 <br>";
$msg2 = "É menor que 100 <br>";


if(is_int($a) || is_float($a)){
    $novo = $a * 2;

    if($novo > 100){
        echo $msg;
    } else{
        echo $msg2;
    }
}  else {
    echo "Não é um número";
}

if(is_int($b) || is_float($b)){
    $novo = $b * 2;

    if($novo > 100){
        echo $msg;
    } else{
        echo $msg2;
    }
}  else {
    echo "Não é um número";
}

if(is_int($c) || is_float($c)){
    $novo = $c * 2;

    if($novo > 100){
        echo $msg;
    } else{
        echo $msg2;
    }
}  else {
    echo "Não é um número <br>";
}

if(is_int($d) || is_float($d)){
    $novo = $d * 2;

    if($novo > 100){
        echo $msg;
    } else{
        echo $msg2;
    }
}  else {
    echo "Não é um número <br>";
}
