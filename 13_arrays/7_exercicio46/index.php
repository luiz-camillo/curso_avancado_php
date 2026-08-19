<?php

  $arrMulti = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
  ];
   
  
  //loop array externo
  for($i = 0; $i < count($arrMulti); $i++){
    echo "Imprimindo array externo:" . ($i +1) . "<br>";


    for($j = 0; $j < count($arrMulti[$i]); $j++){
      echo $arrMulti[$i][$j] . "<br>";
    }
  }

  echo count($arrMulti);