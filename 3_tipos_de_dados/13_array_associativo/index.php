<?php
//é um array que tem chave e valor 


$a = ["nome" => "Luiz", "idade" => 29, "filhos" => true];

if ($a["nome"] == "Luiz"){
  echo "Nome de usuário ok!";
}

if ($a["idade"] == 29){
  echo "<br>Tá veio meu irmão";
}

if ($a["filhos"] == true){
  echo "<br>Parabéns papai ",  $a["nome"];
}