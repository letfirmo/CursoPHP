<?php

function compararNumeros($a,$b){
    if($a > $b){
        return "O primeiro número é maior.";
    } else if($a < $b) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}

echo compararNumeros(10,10);