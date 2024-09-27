<?php

$lista =["café","açucar","mateiga","pão"];
array_push($lista,"queijo");
//for($i=0; $i<count($lista); $i++){
//echo "$lista[$i]\n";
//}
sort($lista);
//iserir presunto porém de forma que continue ordenado
//array_splice:(1,2,3,4)
//1. sua lista
//2. posiçao que voce quer inserir
//3.elementos que voce quer inserir
array_splice($lista,4,0,"presunto");
foreach($lista as $item){
    echo "$item\n";
}
$ultimo = array_pop($lista);
//echo $ultimo











?>