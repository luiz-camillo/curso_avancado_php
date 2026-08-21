<?php

    //array associativo 

    $arr = [
        'Luiz' => 29,
        'Eduarda'=> 28,
        'Gessica' => 28,
        'Marina' => 46
    ];

?> 
<!-- fechamento tag php inicio htm com php integrado -->

<table border="1">
    <tr> <!-- table row representa uma linha na tabela por isso criamos a tabela, agora 
        criamos uma linha que vai conter os cabeçalhos que foram criados logo abaixo  com table header-->
        <th>Nome</th>
        <th>Idade</th>
    </tr> <!-- finalizamos a row da apresentação da tabela -->


<!--no bloco abaixo temos um foreach que vai percorrer o array de pessoas 
toda vez que o loop for acionado ele vai criar uma table row (uma linha) e com o sintaxe de
impressao rapida com php vai imprimir nessa row o nome e a idade da pessoa dentro da tabela -->
    <?php foreach($arr as $nome => $idade):?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>