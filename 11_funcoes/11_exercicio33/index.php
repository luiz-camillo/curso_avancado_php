<?php


  // a que eu fiz
  function maiorQue($arr){
    $arr2 = [];
    for($i=0; $i < count($arr); $i++){
      if($arr[$i] > 7){
        array_push($arr2, $arr[$i]);
      }
    }
  
    return $arr2;
  }


  $arrrr = [1,2,3,4,5,6,7,8,9,10];
  print_r(maiorQue($arrrr));

  // gabarito



  $err = [];

  for($j = 0; $j <= 30; $j++){
    array_push($err, $j);
  } 

  function arrayMaiorQueSete($eerr){
    $eer2 = [];
    for($c=0; $c < count($eerr); $c++){
      if($eerr[$c] > 7){
        array_push($eer2, $eerr[$c]);
      } 
    }

    return $eer2;
  }

  $novoArray = arrayMaiorQueSete($err);

  print_r($novoArray);