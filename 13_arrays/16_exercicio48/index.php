<?php
  $arr =["batata", "maça", "pera", "feijao", "arroz"];


  echo "Imprimindo array antes da remoção de itens:<br>";

  print_r($arr);

  echo "<br>Removendo itens do index 2 e 3 do array:<br>";

  array_splice($arr, 2,2);

  echo "Imprimindo no array:<br>";

  print_r($arr);