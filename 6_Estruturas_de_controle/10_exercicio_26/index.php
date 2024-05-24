<?php

    $velocidade = 40;

    if($velocidade < 40){
        echo "Você está na velocidade certa";
    } else if($velocidade == 40){
        echo "Tome cuidado, está no limite da velocidade! <br>";
    } else {
        echo "Você foi multado <br>";
    }
