<?php

    $num = 10;

    echo rand(10,20) . "<br>"; // generates random number from 10 to 20 ( both included ).

    echo "BINARY VALUE OF " . $num . " = " . decbin($num) . "<br>";   // print the binary of num variable. 
    echo "OCTAL VALUE OF " . $num . " = " . decoct($num) . "<br>";    // print the octal of num variable. 
    echo "HEXADECIMAL VALUE OF " . $num . " = " . dechex($num) . "<br>";    // print the hexadecimal of num variable. 

    echo "SINE OF 30 DEGREE = " . sin(deg2rad(30)) . "<br>"; // print sin of 30 degree.
    echo "COS OF 60 DEGREE = " . cos(deg2rad(60)) . "<br>"; // print cos of 60 degree.
    echo "TAN OF 45 DEGREE = " . tan(deg2rad(45)) . "<br>"; // print tan of 45 degree.

?>