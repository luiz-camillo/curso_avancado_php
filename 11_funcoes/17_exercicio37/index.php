<?php

  function separando($arr){
    $newString = implode(", ", $arr);
    return "Você comprou esses itens: $newString";
  }


$arr1 = ["Feijão", "Arroz", "Açucar", "Leite", "Café", "Ovos", "Macarrao"];

  echo separando($arr1);
  