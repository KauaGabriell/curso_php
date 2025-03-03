<?php
    $x = 0;

    while($x < 5){
        echo $x . "<br>";
        $x++;
    }

    //Exemplo verificando se os números são ímpares;

    $cont = 0; //Definindo Contador

    while ($cont < 50) { //Estrutura While
        if($cont % 2 != 0){ //Verificando se é primo
            echo $cont . "<br>"; //Exibindo se é primo
        }
        $cont++; //Incrementando 1 no contador;
    }