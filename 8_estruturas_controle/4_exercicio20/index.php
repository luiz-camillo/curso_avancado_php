<?php


$a = "Luiz";
$b = 12;
$c = 1.5;
$d = True;
$e = [];

if(is_string($a)){
    echo "É string <br>";
} else{
    echo "Não é string <br>";
}

if(is_int($b)){
    echo "É inteiro <br>";
} else {
    echo "Não é inteiro <br>";
}

if(is_float($c)){
    echo "É float <br>";
} else {
    echo "Não é float <br>";
}

if(is_bool($d)){
    echo "É booleano <br>";
} else {
    echo "Não é booleano <br>";
}


if(is_array($e)){
    echo "É array <br>";
} else {
    echo "Não é array <br>";
}