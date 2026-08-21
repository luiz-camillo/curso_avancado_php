<?php


$arr1 = ["nome" => "Luiz", "idade" => 29, "sexo" => "Masculino"];

if(array_key_exists("nome", $arr1)){
  echo"Achamos o valor";
} else{
  echo"Não achamos nada";
}


//metodo isset


if(isset($arr1["idade"])){
  echo "<br>Sim deu boa o isset";
}


$x = 10;

if(isset($x)){
  echo "<br>Variável existe";
} else {
  echo "<br>Variável não existe";
}