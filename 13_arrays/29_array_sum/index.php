<?php

    //essa função soma os itens float ou int do array ignorando strings nao numericas, porem strings como por ex "10" sao somadas booleano ele converte e soma 1 ou 0
    $arr = [10, 10, "teste", "10", True];

    print_r($arr);

    $soma = array_sum($arr);

    echo "<br>";

    echo $soma;