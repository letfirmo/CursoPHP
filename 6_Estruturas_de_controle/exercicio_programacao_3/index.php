<?php

function calcularDesconto($valor, $categoria){
    if($categoria == "eletrônicos"){
        $desconto = ($valor/100)*10;
        $valorComDesconto = $valor-$desconto;
        return $valorComDesconto;
    } elseif($categoria == "vestuário"){
        $desconto = ($valor/100)*20;
        $valorComDesconto = $valor-$desconto;
        return $valorComDesconto;
    } elseif($categoria == "alimentos"){
        $desconto = ($valor/100)*5;
        $valorComDesconto = $valor-$desconto;
        return $valorComDesconto;
    } else {
        return $valor;
    }
}

echo calcularDesconto(100, "eletrônicos");