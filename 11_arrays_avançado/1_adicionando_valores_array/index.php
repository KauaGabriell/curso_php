<?php
$arr = [];

$arr[0] = "Nelsin";
$arr[1] = "Jones";
$arr[2] = "Peix";
$arr[3] = "Malva";
$arr[4] = "Dav";

$arr2 = [];

//Teste
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] === "Peix") {
        $arr2[$i] = $arr[$i];
    }
}

print_r($arr2);
