<?php
    class demo{
        public $num = 10;
        public $s1 = "Hello";

        function printdata(){
            echo $this->s1;
        }
    }

    $d1 = new demo();
    echo $d1->num . "<br>";
    $d1->printdata();
?>