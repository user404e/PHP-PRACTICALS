<?php
    class demo1{
        protected $num = 20;
    }
    class demo2 extends demo1{
        function printdata(){
            echo $this->num;
        }
    }

    $d2 = new demo2();
    $d2->printdata();
?>