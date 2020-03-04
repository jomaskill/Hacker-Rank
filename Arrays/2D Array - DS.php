<?php

// Complete the hourglassSum function below.
function hourglassSum($arr) {

    $arrayResultados = [];
    $sum = 0;

    for($i=0 ; $i< 4 ; $i++){
        for($j=0 ; $j< 4 ; $j++){
            $sum = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
            array_push($arrayResultados, $sum);
        }
    }
    return max($arrayResultados);
}