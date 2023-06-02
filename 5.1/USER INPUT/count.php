<?php

    $s1 = $_POST['s1'];
    $word_count = 1;
    $count = 0;
    while($s1[$count] != null){
        if($s1[$count] == " "){
            $word_count++;
        }
        $count++;
    }

    echo "Total String Length (including space) : ". $count . "<br>";
    echo "Total Words : ". $word_count;

?>
