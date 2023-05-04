<?php
    class Student{
        var $name;
        var $age;
       
        function setdata($nme,$a){
                $this->name = $nme;            
                $this->age = $a;            
        }

        function showdata(){
                echo "NAME = " . $this->name . "<br>";
                echo "AGE = " . $this->age . "<br>";
        }
}
$s1 = new Student();
$s1->setdata("BHAVYA",18);
$s1->showdata();
?>