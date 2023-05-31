<?php
    $name = $_POST["name"];
    $empid = $_POST["empid"];
    $department = $_POST["department"];
    $position = $_POST["position"];
    $gender = $_POST["gender"];
    $mobilenumber = $_POST["mobilenumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $conn = mysqli_connect("localhost","root","","employee");

    if($conn){
        $sql = "INSERT INTO data VALUES('".$name."','".$empid."','".$department."','".$position."','".$gender."','".$mobilenumber."','".$email."','".$address."');";

        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Values Inserted Successfully";
        }
        else{
            echo "Values Cannot Be Inserted";
        }
    }
    else{
        echo "CANNOT CONNECT TO DATABASE";
    }
?>