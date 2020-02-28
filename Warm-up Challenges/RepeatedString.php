<?php

// Complete the repeatedString function below.
function repeatedString($s, $n)
{

    $a = 0;
    $aTotal = 0;
    $contador = floor($n/strlen($s));
    $resto =  $n%strlen($s);

    for($i=0 ; $i <strlen($s) ; $i++) if($s[$i] == "a" ) $a++;

    $aTotal = $contador*$a;

    for( $i = 0 ; $i < $resto ; $i++) if($s[$i] == "a") $aTotal++;

    return $aTotal;
}
