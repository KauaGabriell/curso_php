<?php
    function jogo_favorito ($jogo, $categoria){ //Inserindo os parâmetros a serem preenchidos
        if(is_string($jogo) && is_string($categoria)){ //Verificando se o que o usuário passou é string
            echo "Meu jogo favorito é o $jogo ele é um jogo da categoria $categoria <br>";
        }else{
            echo "Insira um texto por favor <br>"; //Pedindo para ele inserir texto.
        }
    }
//Imprime valores da função.
    jogo_favorito("Apex", "FPS");
    jogo_favorito("LOL", "Moba");
    jogo_favorito(2, "FPS");