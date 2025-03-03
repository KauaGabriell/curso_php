<?php
    //Pode ser usado para parar o loop
    //Exemplo

    $x = 0;

    while($x <= 10){
        echo "Número: ". $x. "<br>";
        if($x === 5){ //Lógica para inserir um break
            break; //Break - O programa executará a próxima instrução após sair do loop.
        }
        $x++;
    }