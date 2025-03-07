<?php
    

    $str = "O rato roeu a roupa do rei de Roma";
    $contadorAs = 0;
    for ($i = 0; $i < strlen($str); $i++) { 
        
        if($str[$i] === "a"){
            $contadorAs++;
        }
        
    }
    echo $contadorAs;
 
    
    
