<?php
    $arr = [
        10, 10, 30
    ];

    function soma ($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo $resultado . "<br>";