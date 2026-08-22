<?php

    $arr = [
        "Marcos" => 50,
        "Luiz" => 115,
        "Eduarda" =>119,
        "Benício" =>100115,
        "Rafael" => 1520
        
    ];

    echo "Imprimindo array antes de ordenar: ";
    print_r($arr);

    echo "<br>";
     echo "<br>";

    echo "Ordenando array...... <br>";

    arsort($arr);
    
    echo "<br>";

    echo "Array ordenado...... <br>";

    echo "<br>";

    echo "Imprimindo array ordenado: ";
    print_r($arr);

    echo"<br><br>";

    echo "Agora vou aplicar php com html para executar minha lógica";

    ?>

    <div> 
        <h2>Ranking Game</h2>      
        <ol>
            <?php foreach($arr as $nome => $pontos):?>
            <li><?= $nome . " possui " . $pontos . " pontos!" ?></li>
            <?php endforeach; ?>
        </ol>
  </div>

