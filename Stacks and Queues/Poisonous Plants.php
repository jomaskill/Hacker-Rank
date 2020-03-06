<?php

// Complete the poisonousPlants function below.
function poisonousPlants($p) {

    $index = [];
    $nDays = 0;
    $aplantDies= false;
    $gambiarra = 6;

    while ($gambiarra > 0) {

        for($i=1 ; $i < sizeof($p) ; $i++){
            if($p[$i] > $p[$i-1]){
                array_push($index, $i);
                $aplantDies=true;
            }
        }

        foreach ($index as $j){
            unset($p[$j]);
            $p = array_values($p);
        }

        if($aplantDies == true) $nDays++;

        $aplantDies = false;
        $index = [];
        $gambiarra--;
    }

    return $nDays;
}