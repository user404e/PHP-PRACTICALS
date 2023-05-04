<?php
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
    $s4 = $_GET['s4'];

    $avg = ($s1 + $s2 + $s3 + $s4) / 4;

    if($avg>=85 && $avg<=100){
        echo "GRADE AA";
    }
    elseif($avg>=75 && $avg<85){
        echo "GRADE AB";
    }
    elseif($avg>=65 && $avg<75){
        echo "GRADE BB";
    }
    elseif($avg>=55 && $avg<65){
        echo "GRADE BC";
    }
    elseif($avg>=45 && $avg<55){
        echo "GRADE CC";
    }
    elseif($avg>=40 && $avg<45){
        echo "GRADE CD";
    }
    elseif($avg>=35 && $avg<40){
        echo "GRADE DD";
    }
    else{
        echo "GRADE FF";
    }
?>