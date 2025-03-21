<?php

class Humano{
    public const olhos = 2;

    function Mostrar(){
        echo self::olhos. "<br>";
    }
}

$Cleitinho = new Humano;
$Cleitinho->Mostrar();
echo $Cleitinho::olhos;
 
