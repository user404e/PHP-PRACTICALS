<?php
$name = $_GET['name'];

$car_comp = array(
    'Safari' => 'Tata',
    'Nexon' => 'Tata',
    'Tigor' => 'Tata',
    'Tiago' => 'Tata',

    'XUV700' => 'Mahindra',
    'XUV300' => 'Mahindra',
    'Bolero' => 'Mahindra',

    'Swift' => 'Suzuki',
    'Alto' => 'Suzuki',
    'Baleno' => 'Suzuki',
    'Brezza' => 'Suzuki'
);

foreach($car_comp as $car=>$company){
    if($name == $car){
        echo $company;
    }
}

?>