<?php

    $str = "Pão Ovo Mortadela Queijo Salada Suco Mamão Melancia Beterraba Frango Gado";

    $arr = explode(" ", $str);
  
    echo "Essa é a string: " . $str . "<br><br>";

    print_r($arr);

    echo "<br><br>";

    echo"Imprimindo usando array_values: ";
    
    print_r(array_values($arr));

    echo "<br><br>";

    $pessoa = [
    "nome" => "Luiz",
    "idade" => 29,
    "profissao" => "Programador"
    ];

    // Se você aplicar o array_values:
    $apenasValores = array_values($pessoa);

    print_r($apenasValores);

    echo "<br><br>";

    $n1 = array_keys($arr);
    echo "<br><br>";
    $n2 = array_keys($apenasValores);
    echo "<br><br>";
    $n3 = array_keys($pessoa);
    $n4 = array_values($pessoa);

    echo "<br><br>";
    print_r($n1);
    
    echo "<br><br>";
    print_r($n2);
    
    echo "<br><br>";
    print_r($n3);
    
    echo "<br><br>";
    print_r($n4);

    echo "<br><br>";
    print_r(array_values($pessoa));

    // faz mais sentido para entender arrays associativos
     