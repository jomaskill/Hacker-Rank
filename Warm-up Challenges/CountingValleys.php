<?php

function countingValleys($n, $s)
{
    $seaLevel = 0 ;
    $countingValleys = 0;
    $arraySeaLevel = [];

    for($i=0 ; $i<$n ; $i++){

        if($s[$i] == "D") {
            $seaLevel--;
            array_push($arraySeaLevel, $seaLevel);
        } else {
            $seaLevel++;
            array_push($arraySeaLevel, $seaLevel);
            if(isset($s[$i-1])){
                if($arraySeaLevel[$i-1] < 0 && $seaLevel==0){
                    $countingValleys++;
                }
            }
        }
    }
    return $countingValleys;
}