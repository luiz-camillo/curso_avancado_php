<?php

  function defineCorCarro($cor = "Vermelha"){
    return "A cor do carro é: $cor";
  }

  echo defineCorCarro() . "<br>";
  echo defineCorCarro("Azul");
