<?php


    function verificarCategoria(string $categoria): string
    {
        switch($categoria){
            case"eletrônicos":
                return "Essa categoria é de produtos eletrônicos";
                break;
            case"vestuário":
                return "Essa categoria é de produtos de vestuário";
                break;
            case"alimentos":
                return "Essa categoria é de produtos alimentícios";
                break;
            default:
                return "Categoria Desconhecida";
        }   
    }


echo $resultado = verificarCategoria("eletrônicos");

echo $resultado = verificarCategoria("vestuário");

echo $resultado = verificarCategoria("alimentos");

echo $resultado = verificarCategoria("automóveis");
