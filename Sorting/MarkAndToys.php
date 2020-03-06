<?php

// Complete the maximumToys function below.
function maximumToys($prices, $k) {

    $numberOfToys=0;

    while($k >= min($prices)){
        $k -=  min($prices);
        $indice = array_search(min($prices), $prices);
        unset($prices[$indice]);
        $numberOfToys++;
    }


}