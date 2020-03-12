<?php

$numero = 0;
$tab = 5;

if(!is_numeric ($tab)  || $tab < 0){
    echo "Valor Invalido";
} else {
    for ($numero = 0; $numero <= 10; $numero++){
        echo $numero. "x". $tab . "=". ($numero*$tab)."<br>";
    }
}


?>