<?php

  $arrMulti = [
    ["Esse é o Index 0 da linha 1","Esse é o Index 1 da linha 1","Esse é o Index 2 da linha 1","Esse é o Index 3 da linha 1"],
    ["Esse é o Index 0 da linha 2","Esse é o Index 1 da linha 2","Esse é o Index 2 da linha 2","Esse é o Index 3 da linha 2"],
    ["Esse é o Index 0 da linha 3","Esse é o Index 1 da linha 3","Esse é o Index 2 da linha 3","Esse é o Index 3 da linha 3"]
  ];
   
  
  //loop array externo
  for($i = 0; $i < count($arrMulti); $i++){
    echo "Imprimindo array externo:" . ($i +1) . "<br>";


    for($j = 0; $j < count($arrMulti[$i]); $j++){
      echo $arrMulti[$i][$j] . "<br>";
    }
  }
  echo "<br>";
  echo count($arrMulti);