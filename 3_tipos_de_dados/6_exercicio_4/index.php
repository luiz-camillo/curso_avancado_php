


<?php


$a = 3.5;
$b = 4.7;
$c = 8.9;


echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";

if (is_float($c)){
  echo "O número $c é um número de ponto flutuante";
} else {
  echo "Esse não é um número de ponto flutuante";
}