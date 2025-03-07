<?php
    $str = "Encontrando a palavra Peixe, em uma string que tem a palavra Peixe";

    $palavra = strrpos($str, "Peixe");
    echo $palavra . "<br>";

    $palavra2 = strpos($str, "Peixe");
    echo $palavra2;