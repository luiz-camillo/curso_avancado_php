<?php


  $arr1 = [];

  for($i=1;$i<21;$i++){
    array_push($arr1, $i);
  }


  for($i=0;$i<count($arr1);$i++){
      echo $arr1[$i] . "<br>";
  }

  echo "<br>";

  foreach ($arr1 as $n){
    if($n % 2 == 0){
      echo $n . "<br>";
    }
  }


  //exercicio 10b

  echo "<br>";
  echo "Exercicio 10B <br>";


  $arr2 = [];

  for($j=10;$j<=20;$j++){
    array_push($arr2, $j);
  }


  foreach($arr2 as $n2){
    if($n2 % 2 != 0){
      echo "Número Impar: $n2 <br>";
    }
  }

