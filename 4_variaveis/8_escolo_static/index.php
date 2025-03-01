<?php
    function testando_normal(){
        $a = 1;
        $a++;
    }

    testando_normal();
    testando_normal();
    testando_normal();

    //Static

    function testando_static(){
        static $a = 1;
        $a++;

        echo "$a <br>";
    }

    testando_static();
    testando_static();
    testando_static();
