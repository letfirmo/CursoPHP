<?php

    function parOuImpar($num) {
        if($num % 2 === 0){
            echo "o número $num é par <br>";
        } else {
            echo "o número $num é ímpar <br>";
        }
    }

    parOuImpar(30);
    parOuImpar(17);