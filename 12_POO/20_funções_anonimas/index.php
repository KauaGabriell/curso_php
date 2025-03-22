<?php

$numeros = [2, 4, 6, 9];
$filtrar = function($num){
    return ($num % 2) == 0;
};

$numeros = array_filter($numeros, $filtrar);
echo "<pre>"; print_r($numeros); echo "</pre>";


