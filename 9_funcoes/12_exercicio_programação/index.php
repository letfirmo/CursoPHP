<?php

    function sumEvenNumbers($num){
        
        $soma = 0;

        for($i = 1; $i <= $num; $i++){
         
            if($i % 2 === 0){
                $soma += $i;                
            }
            
        }
        return $soma;
    }

   echo sumEvenNumbers(20);