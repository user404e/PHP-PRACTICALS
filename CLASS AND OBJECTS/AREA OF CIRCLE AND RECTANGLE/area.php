<?php
class Area{
    var $radius;
    var $length;
    var $width;

    function circle_area($r){
        $this->radius = $r;
        echo "AREA OF CIRCLE = " . 3.141 * $this->radius * $this->radius;
    }

    function rectangle_area($l,$w){
        $this->length = $l;
        $this->width = $w;

        echo "<br>AREA OF RECTANGLE = " . $this->length * $this->width;
    }
}

$a1 = new Area();
$a1->circle_area(2);
$a1->rectangle_area(5,10);
?>