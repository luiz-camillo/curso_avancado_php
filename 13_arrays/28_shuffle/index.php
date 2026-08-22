<?php


    //shuffle deixa o array reordenado aleatoriamente - altera estrutura do array original

    $arr = range(1,15);

    echo "Array original: ";
    print_r($arr);
    echo "<br>";

    shuffle($arr);

    
    echo "Array shuffle aplicado: ";
    print_r($arr);
    echo "<br>";

    $arrP = ["Luiz", "Jeova", "God", "Lucifer", "Beelzebu"];

    echo "Array original: ";
    print_r($arrP);
    echo "<br>";

    shuffle($arrP);

    
    echo "Array shuffle aplicado: ";
    print_r($arrP);
    echo "<br>";
    