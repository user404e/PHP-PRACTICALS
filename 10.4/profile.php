<?php

    $empid = $_POST['id'];
    $password = $_POST['pass'];

    $conn = mysqli_connect("localhost","root","","employee");

    if($conn){
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn,$sql);

        $flag = FALSE;
        while($row = mysqli_fetch_assoc($result)){
            if($row['id'] == $empid){
                $flag = TRUE;
                if($row['pass'] == $password){
                    
                    $infosql = "SELECT * FROM data WHERE empid = \"" . $empid . "\"";
                    $inforesult = mysqli_query($conn,$infosql);
                    $row = mysqli_fetch_assoc($inforesult);
                    if($infosql){
                        echo "Name = " . $row['name'] . "<br>Employee Id = " . $row['empid'] . "<br>Department : " . $row['department'] . "<br>Position = " . $row['position'] . "<br>Gender = " . $row['gender'] . "<br>Email = " . $row['email'] . "<br>MobileNumber = " . $row['mobilenumber'] . "<br>Address = " . $row['address'];
                    }
                    else{
                        echo "notdone";
                    }
                    break;
                }
                else{
                    echo "Incorrect Password";
                }
            }
        }
        if(!$flag){
            echo "User Not Found";
        }
    }
    else{
        echo "Cannot Connected Successfully";
    }
?>