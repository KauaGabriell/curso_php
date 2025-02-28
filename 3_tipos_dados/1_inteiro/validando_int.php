<?php
    if(is_int(9)){
        echo "Isso é um inteiro". "<br>";
    }

    //Exemplo com variável

    if(is_int("oi")){
        echo "This is a integer";
    }else{
        echo "This is a string";
    }
    
    $a = 90;

    if(is_int($a)){
        echo "É um inteiro";
    }