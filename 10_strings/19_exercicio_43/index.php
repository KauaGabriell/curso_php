<?php
    $str = "carro - navio - helicóptero - barco - jangada";

    $arrayConvertido = explode("-", $str);

    for($i = 0; $i < count($arrayConvertido); $i++){
        echo $arrayConvertido[$i]. "<br>";
    }