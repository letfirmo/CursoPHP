<?php

    $carro = [
        'cor' => 'Amarelo', 
        'ano' => 2016, 
        'modelo' => 'Sandero'
    ];

    print_r($carro);

    $cor = $carro['cor'];
    $ano = $carro['ano'];
    $modelo = $carro['modelo'];

    echo "<br>";
    echo "O carro é da cor $cor, do modelo $modelo e do ano $ano";    