<?php

  $palavra1 = "notebook";
  $palavra2 = "computador";
  $palavra3 = "televisor";
  $palavra4 = "geladeira";
  $frase1 = "olá mundo estou lower";

  //// primeira letra em maisculo usa ucfirst

  echo "$palavra1 <br>";
  echo "$palavra2 <br>";
  echo "$palavra3 <br>";
  echo "$palavra4 <br>";
  echo "$frase1 <br>";

  echo "<br>";
  
  echo "Acima acabei de imprimir as variáveis sem tratamento algum, agora irei reimprimir usando função \"ucfirst()\": <br> <br>";

  echo ucfirst("$palavra1 <br>");
  echo ucfirst("$palavra2 <br>");
  echo ucfirst("$palavra3 <br>");
  echo ucfirst("$palavra4 <br>");
  echo ucfirst("$frase1 <br>");

  // todas as letras iniciais das palavras da frase em maiusculo

  echo "<br>";
  echo "<br>";
  echo "Agora irei imprimir a mesma variável utilizando a função \"ucworld()\" <br> <br>";
  echo ucwords("$frase1 <br>");



