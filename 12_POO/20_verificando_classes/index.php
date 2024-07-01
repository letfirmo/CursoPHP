<?php

    //class_exists() => verifica se uma classe existe
    //get_class_methods() => verifica os metodos de uma classe
    //get_class_vars() => mapeamento das prorpiedades de uma classe

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar() {}

        public function andar() {}
    }

    if(class_exists("Humano")) {
        echo "A classe existe <br>";
    }

    if(class_exists("Cachorro")) {
        echo "A classe existe <br>";
    } else {
        echo "A classe não existe <br>";
    }

    print_r(get_class_vars("Humano"));

    print_r(get_class_methods("Humano"));