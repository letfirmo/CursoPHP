<?php

    function verificarAcesso($idade,$autorização) {
        if($idade >= 18){
            if($autorização == true){
                echo "Acesso autorizado";
            } else {
                echo "Acesso negado. Autorização necessária";
            }
        } else {
            echo "Acesso negado. Idade mínima requerida: 18 anos";
        } 
    }

    verificarAcesso(19, false);