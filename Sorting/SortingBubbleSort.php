<?php

// Complete the countSwaps function below.
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

    echo "Array is sorted in " .$nSwaps. " swaps.\n";
    echo "First Element: ".$a[0]."\n";
    echo "Last Element: ".$a[sizeof($a)-1];
}