<?php

    function calcularDesconto($valor, string $categoria): float
    {   
        if($categoria === "eletrônicos"){
            return $valor - ($valor * 0.10);
        } elseif ($categoria === "vestuário"){
            return $valor - ($valor * 0.20);
        } elseif ($categoria === "alimentos"){
            return $valor - ($valor * 0.05);
        } else {
            return $valorDesconto = $valor;
        }

    }


$desconto = calcularDesconto(100, "alimentos");
echo $desconto;