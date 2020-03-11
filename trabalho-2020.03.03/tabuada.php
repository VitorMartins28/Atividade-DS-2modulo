<?php

$tab=1;

if($tab < 0){
    echo "Valor Invalido";
}
elseif ($tab > 0){
    echo $tab." x ".$count." = ".($tab*$count)."<br />";
    $count++;
   }while($count<=10);


?>