<?php

    //um parametro
    function velocidadeMaxima($vel) {

        //para verificar se é um numero msm:
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Coloque um numero inteiro <br>";
        }

    }

    velocidadeMaxima("nao");

    function descreverAnimal($nome, $raca){
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "Vira-Lata");
s