    <?php

//get receba a variável por URL
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$sinal = $_GET['sinal'];

$resultado=$valor1.$sinal.$valor2;
echo $resultado;

if($sinal == '%2B' ){
    echo $valor1 * $valor2;
}

//meu_site.com.br/get.php?valor1=15&valor2=33&sinal=*