<?php
    class Cachorro{
        function latir(){
            echo "Au";
        }
        function andar($m){
            echo "O cachorro andou ". $m. " metros";
        }
    }

    $Thor = new Cachorro;
    $Thor -> latir();
    echo "<br>";
    $Thor -> andar(30);