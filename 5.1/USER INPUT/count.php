<?php

    $s1 = $_GET['s1'];

    $count = 0;
    while($s1[$count] != null){
        $count++;
    }

    echo "Total String Length : ". $count;

?>
