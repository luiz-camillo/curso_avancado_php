<?php

    function maiorQue10($arr){
        $arr1 = [];

        for($i = 0; $i < count($arr); $i++){
            if($arr[$i]["preço"] > 10){
                array_push($arr1, $arr[$i]);
             }
        }

        return $arr1;
    }


    $produtos = $produtos = [
        [
            "nome" => "Cafeteira",
            "preço" => 150
        ],
        [
            "nome" => "Caneca",
            "preço" => 8
        ],
        [
            "nome" => "Televisão",
            "preço" => 1200
        ],
        [
            "nome" => "Mouse",
            "preço" => 9
        ],
        [
            "nome" => "Teclado",
            "preço" => 80
        ],
        [
            "nome" => "Caderno",
            "preço" => 7
        ],
        [
            "nome" => "Fone de ouvido",
            "preço" => 45
        ],
        [
            "nome" => "Caneta",
            "preço" => 3
        ],
        [
            "nome" => "Garrafa",
            "preço" => 10
        ],
        [
            "nome" => "Monitor",
            "preço" => 900
        ]
    ];

    print_r(maiorQue10($produtos));