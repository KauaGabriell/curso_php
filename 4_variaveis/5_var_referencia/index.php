<?php
    //variaveis por referencia
    $x = 12;
    $y =& $x; //As variáveis ficam com o mesmo valor

    var_dump($x, $y);