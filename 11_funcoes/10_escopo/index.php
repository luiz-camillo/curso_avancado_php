<?php


  $a = 10;

  $b = 15;

  function testeEscopo(){
     $a = 5;

     global $b;

     $b++;
     
     static $c = 0;

     $c ++;
     
     echo "Escopo local de a: $a . <br>";

     echo "Escopo global de b: $b . <br>";

     echo "Escopo static de c: $c . <br>";
  }


  echo "Escopo global de a: $a <br>";

  echo "Escopo global de b: $b <br >";

  testeEscopo();

  testeEscopo();

  testeEscopo();

  
