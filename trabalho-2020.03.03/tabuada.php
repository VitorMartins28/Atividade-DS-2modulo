<?php

$tab=0;
elseif($tab < 0){
    echo "Valor Invalido";
    exit;
}
if($tab > 0){
    for($i=1; $i<=10; $i++){
        $resultado = $tab * $i;
        echo $tab." x ".$i." = ".$resultado."<br />";
}

?>