<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
$valor = 0;
$vendido = 0;
$resultado = $vendido - $valor;

if ($resultado > 0){
   echo "O valor do produto R$". $valor. " Vendido por R$". $vendido. " o lucro é de R$".number_format($resultado,2, ',','.');
}
elseif($resultado < 0){
   echo "O prejuizo é = ". number_format($resultado,2, ',','.');
}

else{
   echo "Empatou o resultado  R$". number_format($resultado,2, ',','.');
}

