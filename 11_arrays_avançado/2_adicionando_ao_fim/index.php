<?php
    $arr = [1, 2, 3];

    $arr[] = 4; //Adiciona ao final;
    $arr2 = [];

    //teste
    print_r($arr2);
    for ($i=0; $i < count($arr); $i++) { 
        if($arr[$i] > 2){
            array_push($arr2, $arr[$i]);
        }
    }

    print_r($arr2);