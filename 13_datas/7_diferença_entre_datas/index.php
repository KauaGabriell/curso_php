<?php

$data1 = new DateTime(); // Data e hora atuais
$data2 = new DateTime(); // Data e hora atuais

// Define a data2 como 12 de fevereiro de 2000
$data2->setDate(2000, 2, 12);

$diferenca = $data1->diff($data2);
print_r($diferenca);
