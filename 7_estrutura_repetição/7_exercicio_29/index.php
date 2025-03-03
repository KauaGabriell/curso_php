<?php
//Forma 01 - "Mais complicada"
    $arr =[
        10, 20, 30, 40, 50 ,60, 70, 80, 90, 100  //Declarando valores do array de 10 em 10 até 100.
    ];
    $x = count($arr); //Contando número de itens do array.
    $y = 0; //Variável contadora

    while($y < $x){ //Estrutura While para fazer com que variável contadora percorra o array
       if($arr[$y] == 30 || $arr[$y] == 40 ){ //Verificando números 30 e 40
        echo "Pulou <br>"; //Pula
        $y++; //Incrementa para não gerar LOOP INFINITO.
        continue; //Pula para próxima instrução
        
       }
        echo "Nº: ". $arr[$y]. "<br>"; //Imprime números.
        $y++; //Incrementa normalmente
    }

    //Forma 02 - Melhorar código
    $arr =[
        10, 20, 30, 40, 50 ,60, 70, 80, 90, 100  //Declarando valores do array de 10 em 10 até 100.
    ];

    $x = 0; //Variável contadora

    while($x < count($arr)){ //Coloca para contar itens de array direto no while, sem declarar variável
        $numero_atual = $arr[$x]; // Indice do array

        if($numero_atual == 30 || $numero_atual == 40){ //Faz com que nã tenha que colocar colchetes.
            $x++;
            continue;
        }
        echo "Nº: ". $numero_atual. "<br>"; 
        $x++;
    }