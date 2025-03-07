<?php
    $str = "Esta é uma string muito grande vamos praticar para percorrer ela";

    for ($i=0; $i < strlen($str); $i++){ 
       echo $str[$i]. "<br>";
    }