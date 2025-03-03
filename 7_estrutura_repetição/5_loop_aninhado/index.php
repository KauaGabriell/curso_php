<?php  
    $i = 1; //Declarando variável contadora do LOOP EXTERNO

    while($i <= 10){ //LOOP EXTERNO
        echo "Número EXTERNO:". $i. "<br>"; //Imprime o LOOP EXTERNO conforme as condições.

        $j = 1; //Declara variável contadora do LOOP INTERNO(ELA TEM QUE FICAR AQUI DENTRO DO ESCOPO PORQUE QUANDO O LOOP EXTERNO TERMINAR DE EXECUTAR ELE TEM QUE "RESETAR" ESSA VARIAVEL PARA 01 NOVAMENTE)
        while($j <= 5){ //LOOP INTERNO
            echo "Número INTERNO:". $j. "<br>"; //Imprime o LOOP INTERNO conforme as condições.
            $j++; //INCREMENTO INTERNO
        }

        $i++;
    }