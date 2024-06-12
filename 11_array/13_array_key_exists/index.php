<?php

//com a funcao array_kay_exists podemos verificar se há um valor em uma respectiva key de um array
//podemos fazer essa checagem em um if
// ex: array_key_exists("nome", $arr)
//outra funcao que podemos utilizar para este fim é a isset

$arr =[
    'nome' => 'Matheus',
    'idade' => 29
];

if(array_key_exists("nome", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe! <br>";

}

if(array_key_exists("profissao", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe <br>";
}

$x = 10;

if(isset($x)) {

    echo "A var existe! ISSET <br>";

} else {

    echo "A var não existe! ISSET <br>";

}