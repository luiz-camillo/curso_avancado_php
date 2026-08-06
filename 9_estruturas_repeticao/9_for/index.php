<?php

  //estrutura for CONTADOR | CONDIÇÃO | PASSO

  $nome = "LUIZ";

  for($i = 0; $i <10; $i++){

    if($i == 4){
      echo "$nome <br>";
    }

    if($i == 8){
      echo "Encerrando loop com break <br>";
      break;
    }
    echo "Teste da estrutura for número $i <br>";
  }