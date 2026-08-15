<?php

  
  if(isset($_POST['numero'])){
    require_once 'functions/sumDigits.php';
    $digito = $_POST['numero'];
    $resultado = sumDigits($digito);
  }else{
    header("Location: html/form.html");
    exit;
  }

  $numStr = strval($digito);
  $arrNumStr = str_split($numStr);
  echo "A soma de " . implode(" + ", $arrNumStr) . " é: ";
  echo $resultado;


