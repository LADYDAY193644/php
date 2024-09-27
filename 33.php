<?php
//usuario insere sua idade
//se menor de idade  -> imprima 3 programas infantis
//se maior de idade  -> imprima 3 carros com seus preços

function listarcarros(){
    echo "opala, R$60.000\nvectra, R$15.000\ngol, R$75.000\n";
}

function listarProgramasInfantis(){
    echo "Tom&Jerry\nPicapau\nLooneytoones\n";
}


$idade = readline("digite sua idade: ");

if( $idade>=18){
    listarcarros();
}
else{
    listarProgramasInfantis();

}