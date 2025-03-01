<?php
    $testando_global = "Isso é Global". "<br>"; //Aqui estamos definindo a variável no escopo global

    if(true){
        echo $testando_global; //Podemos imprimir o valor normalmente, pois conseguimos acessar o global
    }

    function Testando_local (){
       

        global $testando_global; //Esse código aqui me possibilita de utilizar o escopo global dentro da function.

        $testando_global = "oi"; //Consigo alterar o valor da variável global utilizando o local

        echo $testando_global;  //Sem o código acima, Aqui eu não consigo imprimir a variável porque ela está em um escopo diferente. Não consigo acessar o escopo global dentro da function
    }

    Testando_local();

