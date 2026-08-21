<?php


  $arr = range(1,10);

  echo "Imprimindo o array antes de remover itens:<br>";

  print_r($arr);

  echo "<br>";

  $arrRemove = array_splice($arr, 0, 5);

  echo "Imprimindo o array depois de remover itens:<br>";

  print_r($arr);
  

  echo "<br>Imprimindo novo array que criei utilizando os itens que foram removidos:<br>";

  print_r($arrRemove);


  $arr2 = range(1,20);

  
  array_splice($arr2, 10);

  echo "<br>";

  print_r($arr2);

  array_splice($arr2, -4);

  echo "<br>";

  print_r($arr2);