<?php
$name = "Peixe". "<br>"; //Declarando variável no escopo global

function exibirNome($name)
{
    echo $name; //Aqui a função só funciona se eu passar a variável global como parâmetro para a função.
}

echo exibirNome($name); //Aqui a exibição da função só funciona se eu passar a variável como parâmetro.

//Outro Exemplo

$x = 10;
echo $x. "<br>"; //Aqui a é imprimido o valor 10 que está no escopo global

function teste(){
    $x = 5;  
    echo $x;
}

echo teste(); //Aqui o valor imprimido é 5 que está no escopo local da função

