<?php

  function parImpar($x){

  if($x % 2 == 0){
    return "O número $x é par <br>";
  } else {
    return "O número $x é impar <br>";
  }

  }

  echo parImpar(12);
  
  echo parImpar(13);

  $y = parImpar(15);

  echo $y;