<?php
    function alteraDados($nome, $idade){
        $nome = "Sr ". $nome;
        $idade = "$idade anos";
        
        return [$nome, $idade];
    }

    $dados = alteraDados("Kauã", 20);
    print_r($dados);

    echo "Olá" . $dados[0];

