<?php

$arr = [
    "Peixe" => 90,
    "Joao" => 85,
    "Nelsin" => 70, 
    "Mari" => 100
];
$colocacao = 1;
arsort(($arr));
?>

<ul>
    <?php foreach ($arr as $pessoas => $value): ?>
    <li> <?= $colocacao++ . "º " . $pessoas . " " . $value ?> </li>
    <?php endforeach ?>;
</ul>