<?php
$bsalary = $_GET['bsalary'];
$da = $bsalary/2;
$hra = $bsalary/10;
$medical = $bsalary/25;

$gross = $bsalary + $da + $hra + $medical;

$pf = $gross/20;
$insurance = $gross*0.07;

$deduct = $insurance + $pf;
$netsalary = $gross -$deduct;

echo "NET SALARY = " . $netsalary;
?>