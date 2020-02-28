<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar)
{

    $result = 0;
    $auxiliar = [];

    for($i=0 ; $i<sizeof($ar);  $i++){
        if(in_array($i, $auxiliar)) continue;

        for($j=1; $j<sizeof($ar) ; $j++) {
            if($i == $j) continue;

            if (in_array($j, $auxiliar)) continue;

            if ($ar[$i] == $ar[$j]) {
                array_push($auxiliar, $i, $j);
                $result++;
                break;
            }
        }
    }
    return $result;
}
