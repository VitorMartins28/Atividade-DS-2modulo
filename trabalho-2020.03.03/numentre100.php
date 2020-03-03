<?php

$num1 = 10;
$num2 = 10;
$resultado = $num1 * $num2  ;
    if($resultado < 10){
        echo " Menor que 10: $resultado";
    }elseif(($resultado >= 10  ) && ($resultado <= 100)){
        echo "Numero entre 10 e 100: ".$resultado;
    }
        if($resultado > 100){
            echo "Maior que 100: $resultado";
        }
    ?>