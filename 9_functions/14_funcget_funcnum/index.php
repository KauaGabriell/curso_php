<?php
    function teste($a, $b){
        echo func_num_args();
        $a + $b;
    }

    teste(4, 5);