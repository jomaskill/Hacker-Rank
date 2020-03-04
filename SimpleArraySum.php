<?php

//Testes de entrada
$n = 3;
$ar = [2,2,2];

echo SimpleArraySum($n, $ar);

function simpleArraySum($n, $ar) {

    $sum = 0;

    for($i=0 ; $i < $n ; $i++){
        $sum += $ar[$i];
    }

    return $sum;
}