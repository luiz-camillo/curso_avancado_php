<?php

  $texto = "<div><p>Testando parágrafo. </p></div> <div>Outra div</div>";

  echo $texto . "<br>";

  $textoBanco = strip_tags($texto);

  echo $textoBanco;