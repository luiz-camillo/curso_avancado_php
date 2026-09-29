<?php

    //a funcao converte valores de string para datas 

    echo "Essa é a data atual: " . date ('d/m/Y') . "<br>";

    echo "Essa é a data atual utilizando função strtotime + 2 years " . date ('d/m/Y', strtotime('+2 years')) . "<br>";


    $cincoDias = strtotime('5 days');

    echo $cincoDias . "<br>";


    $dezDias = strtotime('10 days');

    echo $dezDias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincoDias);

    echo $dataAtualMais5 . "<br>";

    $dataAtualMaisDoisMeses = date('d/m/y', strtotime('2 months'));

    echo $dataAtualMaisDoisMeses . "<br>";

    $dataAtualMais12Anos = date('D/m/Y', strtotime('12 years'));

    echo $dataAtualMais12Anos . "<br>";