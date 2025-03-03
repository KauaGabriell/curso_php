<?php
    $a = 10; //Defini variável contadora

    while($a > 0){ //Estrutura While
        if($a === 5 || $a === 7){ //Verifica quando chegar no 5 ou 7
            echo "Pulei o ". $a. "<br>"; // Pula os números
            $a--; //Descrementa após pular
            continue; // Continua o While
            
        }
        echo "Número: ". $a. "<br>"; //Imprime todos os números
        $a--;//Descremente
    }