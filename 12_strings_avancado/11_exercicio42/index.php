<?php

  $frase = "este item está em promoção";

  $novaFrase = explode(" ", $frase);

  print_r($novaFrase);

  echo("<br>");

  $novaFrase[0] = ucfirst($novaFrase[0]);
  $novaFrase[4] = strtoupper($novaFrase[4]);

  
  print_r($novaFrase);

  echo "<br>";
  $nova = implode(" ", $novaFrase);

  echo $nova;