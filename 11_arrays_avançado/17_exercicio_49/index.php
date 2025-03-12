<?php
    $especie = "Felino";
    $cor = "Preto";
    $habitat = "Selva";

    
    $arr = compact('especie', 'cor', 'habitat');
    foreach ($arr as $carac => $value) {
        echo $carac . ": " . $value . "<br>";
    }
    