<?php


$x = 12;

$y =& $x;

echo $x;
echo "<br>";
echo $y;


//como a variavel y obtém o valor igual a x e estão linkadas, se eu alterar o valor de y o x tbm assume o mesmo valor devido a estarem linkadas

echo "<br>";

$y = 21;

echo $x;
echo "<br>";
echo $y;

////testando lógica com strings 

$name = "luiz";

$nome =& $name;

echo "<br>";
echo $nome;
echo "<br>";
echo $name;

/////atribuindo novo valor a variável name

$name = "Jordan Smith";

echo "<br>";
echo $nome;
echo "<br>";
echo $name;