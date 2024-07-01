<?php

//criar calculadora com os seguintes metodos
//somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
//subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
//multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
//dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.

    class Calculadora {

        public function somar($a, $b){
            return $a + $b;
        }

        public function subtrair($a, $b) {
            return $a - $b;
        }

        public function multiplicar($a, $b) {
            return $a * $b;
        }

        public function dividir($a, $b) {
            if ($b == 0) {
                return "Erro: Divisão por zero";
            }
            return $a / $b;   
        }
    }

    //exemplo de uso

    $calc = new Calculadora();

    echo $calc->somar(10, 5) . "<br>";
    echo $calc->subtrair(10, 5) . "<br>";
    echo $calc->multiplicar(10, 5) . "<br>";
    echo $calc->dividir(10, 5) . "<br>";
    echo $calc->dividir(10, 0) . "<br>";

