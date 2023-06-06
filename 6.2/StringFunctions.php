<?php
    $s1 = "hello";
    $s2 = "     hii   there     ";
    // check the string is in lower case or not 
    if(strtolower($s1) == $s1){
        echo "String Is In Lower Case" . "<br>";
    }
    else{
        echo "Given String Is Not In Lower Case"  . "<br>";
    }

    echo strrev($s1) . "<br>"; // reseverse string

    
    echo trim($s2) . "<br>"; // remove white spaces from string 

    echo str_replace("h","y",$s1); // replace 'h' in s1 with 'w'

?>