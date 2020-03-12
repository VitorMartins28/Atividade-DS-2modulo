<?php

$numero = 0;
$tab = 15;

if(!is_numeric ($tab)  || $tab < 0){
    echo "Valor Invalido";
} else {
    while ($numero <= 10){
        echo $numero. "x". $tab . "=". ($numero*$tab)."<br>";
        $numero++;
    }
}


?>