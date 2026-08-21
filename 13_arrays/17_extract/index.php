<?php

  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
  ];

  //o extract serve para extrair a chave do array associativo e criar uma variavel com o nome da chave e o valor 

  extract($arr);

  echo "O objeto é $cor, tem formato $forma e é feito de $material<br>";

  //agora vou criar um array novo e vou usar o extract depois de criar uma variável identica que sera alterada pela criação do extract


  $cor = "preta";

  echo "<br>O carro tem cor $cor";

  $arr2 = [
    "cor" => "azul",
    "aro" => "18",
    "marca" => "volkswagen",
    "modelo" => "tiguan r all space",
    "total de portas"=> 4
  ];

  extract($arr2);

  echo "<br><br>";

  print_r(get_defined_vars());

  echo "<br>O carro é $cor, com rodas aro $aro, da marca $marca e é uma $modelo";




