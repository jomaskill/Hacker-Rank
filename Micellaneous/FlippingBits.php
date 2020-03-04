<?php

//Testes de entrada
$n = "3\n2147483647\n1\n0";
echo flippingBits($n);



// Complete the flippingBits function below.
function flippingBits($n) {

    $n = explode("\n", $n);
    $nLinhas = $n[0];

    $sum = [];
    $array = [];


    for($j=1 ; $j <= $nLinhas ; $j++){
        //$sum[$j-1] = 0;
        for($i=31 ; $i >= 0 ;$i--){
                if($n[$j] >= pow(2, $i)) {
                    $n[$j] -= pow(2, $i);
                    $array[$i] = 0;
                }
            else $array[$i] = 1;
            if($array[$i] == 1) $sum[$j-1] += pow(2, $i);
        }
    }
    $sum = implode("\n", $sum);
    return $sum;
}