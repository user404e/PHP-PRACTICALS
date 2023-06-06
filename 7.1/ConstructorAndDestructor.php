<?php
    class demo{
        var $num = 10;

        function __construct(){
            echo $this->num . "<br>";
        }

        function __destruct(){
            echo "Destructor Called !";
        }
    }

    $d1 = new demo();

    echo "Hello , There !" . "<br>";
?>