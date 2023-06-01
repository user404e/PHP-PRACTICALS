<?php
    $m1 = array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );

    $m2 = array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );

    $ans = array(
        array(0,0,0),
        array(0,0,0),
        array(0,0,0)
    );
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            for($k=0;$k<3;$k++){
                $ans[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
            }
        }
    }
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $ans[$i][$j] . " ";
        }
        echo "<br>";
    }
?>