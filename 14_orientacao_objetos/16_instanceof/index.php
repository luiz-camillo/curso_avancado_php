<?php



    class Humano{


    }

    class Animal {


    }

    class Professor extends Humano{


    }



    $luiz = new Humano;

    if($luiz instanceof Humano){
        echo "Luiz é um humano";
    } else {
        echo "Luiz não é humano";
    }


    echo"<br>"; 

    $spike = new Animal;

    if($spike instanceof Humano){
        echo "Spike é um humano";
    } else {
        echo "Spike não é humano";
    }

    echo"<br>"; 

    $luli = new Professor;

    if($luli instanceof Humano){
        echo "Luli é um humano";
    } else {
        echo "Luli não é humano";
    }




    