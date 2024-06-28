<?php

//crie uma classe carro
//crie algumas propriedades e tambem a prorpiedade_maximaa
//crie o métoco setVelocidadeMaxima, onde é possivel alterar a velocidade máxima do carro
//e também o getVelocidadeMinima que é possivel imprimir a velocidade do carro

    class Carro {

        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
        }
    }

    $bmw = new Carro;

    $bmw->cor = "Branca";
    $bmw->tetoSolar = true;

    $bmw->setVelocidadeMaxima(200);

    $bmw->getVelocidadeMaxima();

    $ferrari = new Carro;

    $ferrari->setVelocidadeMaxima(300);

    $ferrari->getVelocidadeMaxima();