<?php


    $arr = ["Teste", 13, 45.4, TRUE, FALSE, [1,2,3,4], TRUE, "LUIZ"];


    print_r($arr);

    echo "<br>";

    var_dump($arr);

    /* ACHEI MUITO BOM ESSE APRENDIZADO, O RESULTADO RETORNADO FOI
    Array ( [0] => Teste [1] => 13 [2] => 45.4 [3] => 1 [4] => [5] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) [6] => 1 [7] => LUIZ )
array(8) { [0]=> string(5) "Teste" [1]=> int(13) [2]=> float(45.4) [3]=> bool(true) [4]=> bool(false) [5]=> array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) } [6]=> bool(true) [7]=> string(4) "LUIZ" }


    TORNANDO MUITO FACIL RECONHECER OS DADOS, O VAR DUMP RETORNA MUITA INFORMAÇÃO, NO EXEMPLO ACIMA TEMOS NO INICIO A QUANTIDADE DE ITENS NO ARRAY QUE É 8
    TODAS AS POSIÇÕES DO ARRAY SEGUIDAS PELO TIPO DE DADO E O DADO NA SEQUENCIA EX: [3]=> bool(true)*/

