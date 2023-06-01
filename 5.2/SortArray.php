<?php
$arr = array(32,3,2,5,24,234,25,4,632);

for($a = 0; $a < count($arr); $a++) {
    for($b = 0; $b < count($arr)-1; $b ++){
        if($arr[$b] > $arr[$b+1]) {
            $temp = $arr[$b+1];
            $arr[$b+1]=$arr[$b];
            $arr[$b]=$temp;
        }       
    }
}

print_r($arr);
?>