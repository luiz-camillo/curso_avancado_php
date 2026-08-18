<?php


  $palavra = "Está é a minha string";


  $minha = substr($palavra, 10, 6);

  echo $minha . "<br>";

  $palavra2 = "Testando esta string";

  $novaString = substr($palavra2, 9);

  echo $novaString . "<br>";

  $novaString2 = substr($palavra2, 9, -5);

  echo $novaString2;