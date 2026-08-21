<?php
  //compact transforma variaveis em um array associativo usando nome variavel com chave e valor como valor

  $new = "Novo";

  $nr = 12;

  $amor = "Duda";

  $money = 5500.00;

  $nome = "Luiz";

  $arrRandom = compact("new", "nr", "amor", "money", "nome");

  print_r($arrRandom);