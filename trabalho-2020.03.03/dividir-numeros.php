<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php  

$nun1 = 50;
$nun2 = 28;

if($nun2 == 0){
    echo "Não é possível fazer a divisão";
    exit;
}

$resultado = $nun1 / $nun2;
echo "<br>--------------------- Divisão duas variaveis--------------------------------- <br><br>" ;
echo "Resultado = ". round($resultado, 2); 

?>