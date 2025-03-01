<?php
    function soma($a, $b){ //Aqui colocamos os parâmetros da função que no caso desse escopo são duas variáveis que foram criadas através dessa function.
        echo $a + $b;
        echo "<br>";
    }

    soma(10, 9); //Aqui eu passo os valores que correspondem as variáveis do tipo "parâmetro".

