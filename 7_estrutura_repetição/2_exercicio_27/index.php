<?php
    $array = [
        "Peixe",
        8,
        9,
        "Jãozin",
        true,
        false,
        'Nelson',
        98,
        -90,
        "Pato"
    ];

    $x = count($array); //Contar quantidade de itens que tem no array
    $y = 0; //Variável contadora;
    while($y < $x){ //Enquanto variável não chegar no número de itens que é o $x ele não vai parar de contar
        if(is_string($array[$y])){ //Verificando se itens do array são string.
            echo $array[$y] . "<br>"; //Imprimindo itens do array após verificação
        }
        $y++; //Incrementando para ir para próximo número do array.

    }