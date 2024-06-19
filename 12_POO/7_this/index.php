<?php

    //this se refere a instancia atual do obbjeto
    //podendo assim alterar um valor de uma prorpiedade do objeto com:
    //$this->propriedade =  "x"
    //pode invocar um metodo do objeto com this

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "au au <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $frida = new Animal;

    echo "O nome do animal é: $frida->nome <br>";

    $frida->escolherNome("Frida");

    echo "O nome do animal é: $frida->nome <br>";

    echo $frida->latir();

    echo $frida->latirForte();
