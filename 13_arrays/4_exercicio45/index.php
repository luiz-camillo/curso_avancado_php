<?php
  $arr = range(10,45);

  $soma = 6;

  foreach($arr as $n){
    $newN = $n + $soma;
    if($newN > 30){
      echo("A soma passou de 30, ficou em $newN . <br>");
    } else{
      echo $newN . "<br>";
    }
  }