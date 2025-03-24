<?php

$teste = "365 days"; // Em inglês para o strtotime() funcionar corretamente
$data1 = date('d/m/y', strtotime($teste)); // Converte "365 days" para timestamp
echo $Data1;

echo "oi";
