<?php

  $nome1 = "Luiz";
  $nome2 = "Eduarda";

  $nomeArray = str_split($nome1);

  foreach($nomeArray as $n){
    echo $n . "<br>";
  }

  echo "<br>";

  for($i = 0; $i < strlen($nome2); $i++){
    echo $nome2[$i] . "<br>";
  }
