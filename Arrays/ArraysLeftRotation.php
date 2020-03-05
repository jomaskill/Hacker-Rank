<?php

// Complete the rotLeft function below.
function rotLeft($a, $d) {

    for($i = 0; $i < $d ; $i++){
        array_push($a, array_shift($a));
    }

    return $a;
}