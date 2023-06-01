<?php
    $n1 = 0;
    $n2 = 1;
    $term = 5;
    $counter = 0;
    while ($counter < $term){
        echo ' '.$n1;
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        $counter = $counter + 1;
    }
?>