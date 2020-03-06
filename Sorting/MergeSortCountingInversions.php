<?php

// Complete the countInversions function below.
function countInversions($arr) {
    $nSwaps = [];
    array_push($nSwaps, countSwaps($arr));

    foreach ($nSwaps as $n) return  $n;
}

function countSwaps($a) {
    $nSwaps=0;

    for ($i = 0; $i < sizeof($a); $i++) {
        for ($j = 0; $j < sizeof($a) - 1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                list( $a[$j], $a[$j + 1] ) = array( $a[$j + 1], $a[$j] );
                $nSwaps++;
            }
        }
    }
    return $nSwaps;
}