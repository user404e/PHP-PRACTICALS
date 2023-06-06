<?php
    $name = $_POST["name"];
    $empid = $_POST["empid"];
    $department = $_POST["department"];
    $position = $_POST["position"];
    $gender = $_POST["gender"];
    $mobilenumber = $_POST["mobileno"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    echo "NAME = " . $name . "<br>";
    echo "EMPLOYEE ID = " . $empid . "<br>";
    echo "DEPARTMENT = " . $department . "<br>";
    echo "POSITION = " . $position . "<br>";
    echo "GENDER = " . $gender . "<br>";
    echo "MOBILE NUMBER = " . $mobilenumber . "<br>";
    echo "EMAIL = " . $email . "<br>";
    echo "ADDRESS = " . $address . "<br>";
?>