<?php

    $pessoa = ["Luiz", 29, "Programador", "Castanhos"];
    $pessoa1 = ["Dhionatan", 25, "MANUTENÇÃO", "Azuis"];

    //essa sintaxe esta legada
    list($nome, $idade, $profissao, $corOlhos) = $pessoa;


    //formato no padrao atualizado 

    [$nome1, $idade1, $profissao1, $corOlhos1] = $pessoa1;

    print_r($pessoa);

    echo "<br>";

    echo "Olá, meu nome é $nome, tenho $idade anos e trabalho como " . mb_strtolower($profissao) . ". Uma curiosidade é que possuo olhos da cor " . mb_strtolower($corOlhos);

    echo "<br>";

    print_r($pessoa1);

    echo "<br>";

    echo "Olá, meu nome é $nome1, tenho $idade1 anos e trabalho como " . mb_strtolower($profissao1) . ". Uma curiosidade é que possuo olhos da cor " . mb_strtolower($corOlhos1);