<?php
    $arr = [
        'carro' => 900,
        'sofa' => 100,
        'chinelo' => 9,
    ];

    function verifica10 ($arr){
        $itensCaros = [];
        foreach ($arr as $itens => $preço){
            if($preço > 10){
                array_push($itensCaros, $itens);
            }
        }
        return $itensCaros;
    }

    $novoArrayCaro = verifica10($arr);
    print_r($novoArrayCaro); 
    

    