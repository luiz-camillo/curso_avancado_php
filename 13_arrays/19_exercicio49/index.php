<?php

  $raca = "Gato";

  $cor = "Laranja";

  $idade = 3;

  $corOlhos = "Azul";

  $animal = compact("raca", "cor", "idade", "corOlhos");

  foreach($animal as $caracteristica => $value){
    echo "$caracteristica: $value <br>";
  }