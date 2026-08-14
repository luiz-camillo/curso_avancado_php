<?php

  function teste($a = "teste"){
    echo "O valor de A é: $a <br>";
  }


  teste(); 

  teste("meusovo");

  /////

  function teste2($b){
    echo "O valor de B é: $b <br>";
  }

  teste2(212);


  /////

  
  function teste3($c=12){
    echo "O valor de C é: $c <br>";
  }

  teste3();
  teste3(99);