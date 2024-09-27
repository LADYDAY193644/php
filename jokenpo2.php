<?php
$jogador1 = readline("faça sua jogada: ");

//jogador2 = readline("faça sua jogada");
$jogadas = ["pedra","papel","tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)] ;

if( ($jogador1 ==="pedra" && $jogador2==="tesoura")||
 ($jogador1 === "tesoura" && $jogador2==="papel")||
 ($jogador1 ==="papel" && $jogador2==="pedra")){
    echo "jogadpor 1 ganhou !\n";
 }
elseif($jogador1 ===$jogador2){
    echo "empate\n";
}
else{
    echo "jogador 2 ganhou!\n";
}

