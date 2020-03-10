<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
$valorReal = 50;
$valor_venda = 90;
$lucro = $valor_venda - $valorReal;
$porcentagem = $lucro/$valor_venda*100;

   echo "O valor do produto R$". $valorReal. "<br> <br> Vendido por R$". $valor_venda. " o lucro é de R$".$lucro;
   echo " <br> <br> A porcetagem é de ".round($porcentagem, 2)."%";


