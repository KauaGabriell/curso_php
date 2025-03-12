<?php
    $arr = [
        "Peixe" => 20,
        "Joao" => 20, 
        "Nelsin" => 19
    ];
    asort($arr);
    ksort($arr);
    print_r($arr);