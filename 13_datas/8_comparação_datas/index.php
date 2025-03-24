<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataA->setDate(2000, 10, 22);

if($dataA > $dataB){
    echo "Peixe";
}else{
    echo "Galinha";
}
