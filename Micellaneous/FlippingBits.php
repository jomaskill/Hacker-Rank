<?php

// Complete the flippingBits function below.
function flippingBits($n) {

    explode("\n", $n) ? $n = explode("\n", $n) : $n = $n;

    $sum = [];
    $array = [];


    for($j=0 ; $j < sizeof($n) ; $j++){
        $sum[$j-1] = 0;
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