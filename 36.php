<?php
//usuario digita um numero
//computador escolhe um numero
//se a soma dos 2 numeros forem par o usuario vence
//se for impar, o computador vence

function ehparouimpar($usuario,$computador){
    $soma = $usuario + $computador;
    if($soma%2==0){
        echo "usuario ganhou\n";
    }
    else{
        echo "computador ganhou\n";
    }
}
$usuario = readline("digita um numero  ");
$computador = rand(1,100);
ehparouimpar($usuario,$computador);
18


?>

