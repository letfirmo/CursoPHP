<?php
    //crie um array com strings;
    //utilize a função implode no array;
    //primeiro argumeto: ","
    //segundo argumento: o seu array
    //atribua a invocão da função a uma variável
    //exiba o resultado

    $arr = ["Teste", "Olá", "Balão", "Janela", "Planta"];

    $teste = implode(", ", $arr); //vai colocar uma virgula entre cada componente da lista

    echo $teste;
