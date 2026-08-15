<?php


    //existem duas formas de interpolar utilizando ou nao chaves a dica é manter um padraoo de sintaxe para o projeto todo
    
    $nome = "Luiz";
    $idade = 29;
    $profissao = "programador";


    echo "Eu tenho $idade anos <br>";

    echo "Eu tenho {$idade} anos <br>";

    echo "Me chamo $nome, tenho $idade anos e atuo como $profissao <br>";