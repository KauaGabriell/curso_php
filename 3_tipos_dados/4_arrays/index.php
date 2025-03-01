<?php  
    $num = [1, 2, 3, 4];

    print_r($num); // Imprime o Array na tela, porém com seus respectivos arrays.

    $array = ["Matheus", 19, true]; //Array pode ter vários tipos de dados como valor

    //Array associativo

    $pessoa = [
        'nome' => "Peixe",
        'idade' => 20,
        'lindo' => true,
    ];

    //Imprimindo array associativo
    echo "Meu nome é " . $pessoa['nome'] . " eu tenho " . $pessoa['idade']. " anos." . "<br>";


    $pessoa = [
        'nome' => 'Peixe',
        'idade' => '20',
    ];

    if($pessoa['idade'] >= 18){
        echo "Você é maior de idade";
    }