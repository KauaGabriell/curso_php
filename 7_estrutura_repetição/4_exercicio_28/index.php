<?php
    $a = 4;
    $limite = 30;

    while($a < $limite){
        echo $a . "<br>";
        if($a === 24){
            break;
        }

        $a+= 2;
    }