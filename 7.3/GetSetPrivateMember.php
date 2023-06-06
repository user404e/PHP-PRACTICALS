<?php
    class demo{
        private $num;

        function set($value){
            $this->num = $value;
        }

        function get(){
            echo $this->num;
        }
    }

    $d1 = new demo();

    $d1->set(20);
    $d1->get();
?>