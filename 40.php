<?php
//digitar 10 números,somar e fazer
//a média
$lista=[];
$somatorio=0;
for($i=0; $i<10;$i++){
    $numero = readline("digite um numero: ");
    //usando lista
    $lista[$i]= $numero;
    //sem usar lista
    $somatorio += $numero;
    //$somatorio = $somatorio + $numero
}
echo "a soma é $somatorio\n";
//echo "a soma é: " . array_sum($lista) . "\n";
$media = $somatorio/10;
//$media = array_sum($lista)/count($lista);
echo "a média é $media\n";









?>
