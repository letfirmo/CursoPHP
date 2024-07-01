<?php

//as classes anonimas sao criadas em uma cariavel e nao possuem nome
//elas funcuonam como qualuqer outra classe
//precisa fechar ela co ";"

    $pessoa = new class() {

        public $nome = "Matheus";

        public function dizerNome() {
            echo "Olá meu nome é $this->nome <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();