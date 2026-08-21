<?php


    $arr = ['banana', 'maça', 'pera', 'melancia', 'morango'];

    if(in_array('banana', $arr)){
        echo "Item foi localizado <br>";
    } else{
        echo "Item não encontrado <br>";
    };


    $item = "maca";

    
    if(in_array($item, $arr)){ //parametro é o item e depois em qual array deve buscar 

        echo "Item foi localizado <br>";
    } else{
        echo "Item não encontrado <br>";
    };

    