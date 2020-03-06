<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr) {

    $noofswaps = 0;
    $temp=0;

   for($i=0 ; $i < sizeof($arr) ; $i++){
       while ($arr[$i] != $i + 1){
           $temp = $arr[$i];
        $arr[$i] = $arr[$arr[$i] - 1];
        $arr[$temp - 1] = $temp;
        $noofswaps += 1;
       }
   }

   return $noofswaps;
}