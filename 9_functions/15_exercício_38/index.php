<?php
    $itensMercado = ["Macarrão", "Feijão", "Detergente", "Arroz"];

    function transformString ($array){
        $str = "Você levou os seguintes itens do mercado: ";
        for($i = 0; $i < count($array); $i++){
            if($i + 1 == count($array)){
                $str .= "$array[$i]. ";
            }else{
                $str .= "$array[$i], ";
            }
        }
        return $str;
    }

    echo transformString($itensMercado);

