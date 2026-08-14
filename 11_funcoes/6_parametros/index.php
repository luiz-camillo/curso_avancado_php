<?php

  function velocidadeMaxima($vel){

    if(is_numeric($vel)){
      echo "O carro atinge a velocidade máxima de $vel km/h";
    }else{
      echo"Precisa ser um valor numérico";
    }

  }


  velocidadeMaxima(50.5);
  
  echo"<br>";
  
  velocidadeMaxima(150.5);
  
  echo"<br>";

  $veloo = 255;

  velocidadeMaxima($veloo);

  echo"<br>";
  
  velocidadeMaxima("leite");
  