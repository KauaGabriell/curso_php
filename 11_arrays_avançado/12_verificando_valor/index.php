<?php
$arr = ['nome' => "Kauã", 'idade' => 30];

if(array_key_exists("peixe", $arr)){
    echo "Existe";
}

echo "<br>";

if(isset($arr['nome'])){
    echo "Existe com isset";
}