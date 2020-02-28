<?php

function jumpingOnClouds($c)
{

    $cont = 0;

    for($i=0 ; $i < sizeof($c) ; $i++){

        if($i == sizeof($c)) break;

        if(isset($c[$i + 2])) {
            if ($c[$i + 2] == 0) {
                $cont++;
                $i++;
            } elseif ($c[$i + 1] == 0) {
                $cont++;
            }
        } elseif (isset($c[$i + 1])){
            if ($c[$i + 1] == 0){
                $cont++;
            }
        }
    }
    return $cont;
}