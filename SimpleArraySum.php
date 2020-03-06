<?php

// Complete the staircase function below.
function staircase($n)
{

    for($i=0 ; $i<$n ; $i++){
        for($j=0 ; $j < $i ; $j++){
            echo "#";
        }

        echo "\n";
    }
}

