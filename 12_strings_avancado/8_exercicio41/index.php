<?php


$string = "O rato roeu a roupa do rei de roma";

$sArray = str_split($string);

$count = 0;
foreach($sArray as $s){
  if($s == "a"){
    $count+=1;  
  }
}

echo("A string \"  $string  \", possui $count letras \"a\" ");