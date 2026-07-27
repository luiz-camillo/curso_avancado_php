<?php 
    function verificarAcesso($age, bool $info): string
{
    if($age >= 18 && $info == True){
        return "Acesso autorizado";
    } elseif($age < 18){
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else{
        return "Acesso negado. Autorização necessária";
    }
}



$resultado = verificarAcesso(17, False);

echo $resultado;