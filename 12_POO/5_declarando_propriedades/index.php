<?php

    class Car {

        public $rodas;
        public $aro =20;
        public $cor = "Vermelha <br>";

        function ligar() {
            echo "Vrummm <br>";
        }
    }

    $ferrari = new Car;

    $ferrari->rodas = 4;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas ."<br>";

    $ferrari->cor = "Azul <br>";

    echo $ferrari->cor;

    $ferrari->ligar();