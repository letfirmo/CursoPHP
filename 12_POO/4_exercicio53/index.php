<?php

    class Cachorro{
        function latir(){
            echo "auauau <br>";
        }

        function andar($m){
            echo "o cachorro andou $m metros <br>";
        }
    }

    $viraLata = new Cachorro;
    $pastorAlemao = new Cachorro;

    $viraLata->latir();
    $pastorAlemao->latir();

    $viraLata->andar(1000);
    $pastorAlemao->andar(50);