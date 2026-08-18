<?php


  $str1 = "carro - navio - helicóptero - barco - jangada";

  $newArr = explode("-", $str1);

  print_r($newArr);

  echo "<br>";

  for($i = 0; $i < count($newArr); $i++){
    echo "Item no index $i = $newArr[$i] <br>";
  }