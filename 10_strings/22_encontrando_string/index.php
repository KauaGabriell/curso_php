<?php
    $str = "Testando função para encontrar alguma palavra na string";

    $palavra = strpos($str, "JAVA");


    if($palavra === false){
        echo "Não encontrada";
    } else{
        echo "Encontrada";
    }