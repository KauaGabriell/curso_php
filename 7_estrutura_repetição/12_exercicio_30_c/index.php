<?php
    $arr = []; //Array vazio que será preenchido com for
    $y = 0;
    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);
    }

    for($y = 0; $y < count($arr); $y++){
        $numero_atual = $arr[$y];
        if($numero_atual % 2 != 0){
            echo $arr[$y]. "<br>";
        }
    }
    


