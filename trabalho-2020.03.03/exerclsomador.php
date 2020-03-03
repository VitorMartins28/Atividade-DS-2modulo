
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$nun1 = 50;
$nun2 = 20;
$nun3 = 23;
$nun4 = 1;
$primeironome = "Vitor";
$segundonone = " Martins";


$resultado = $nun1 + $nun2;
echo "---------------------Soma duas variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 + $nun2 + $nun3;
echo "<br>---------------------Soma tres variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 + $nun2 + $nun3 +$nun4;
echo "<br>---------------------Soma quatro variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 - $nun2 ;
echo "<br>--------------------- Subtração duas variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 - $nun2 - $nun3;
echo "<br>--------------------- Subtração Três variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 * $nun2;
echo "<br>--------------------- Multiplicação duas variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado;

$resultado = $nun1 / $nun2;
echo "<br>--------------------- Divisão duas variaveis--------------------------------- <br>" ;
echo "Resultado = ". $resultado; 
  echo"<br>";
  echo"<br>";

  $nomeCompleto = $primeironome;
  $nomeCompleto .= $segundonone;

echo  " Meu nome é " . $nomeCompleto;


?>
</body>
</html>
