<?php

//crie uma classe humano com algumas propriedades e o metodo falar
//crie uma outra classe professor que herda de humano, crie tambem as propriedades e metodos particulares desta classe
//exiba os valores das propriedades da classe pai e tambem utilize os metodos

    class Humano {

        public $maos = 2;
        public $pernas = 2;

        public function falar() {
            echo "Olá, eu sou um humano <br>";
        }
    }

    class Professor extends Humano {

        public $disciplina = "Matemática";

        public function estaLecionando() {
            echo "O professor está dando aula de $this->disciplina <br>";
        }
    }

    $marcos = new Humano;

    echo "$marcos->maos <br>";
    $marcos->falar();

    $joao = new Professor;

    echo "$joao->pernas <br>";
    echo "$joao->disciplina <br>";

    $joao->falar();

    $joao->estaLecionando();
    