<?php

    $userid = $_POST['id'];
    $password = $_POST['pass'];
    $newpass = $_POST['newpass'];

    $conn = mysqli_connect("localhost","root","","employee");

    if($conn){
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn,$sql);

        $flag = FALSE;
        while($row = mysqli_fetch_assoc($result)){
            if($row['id'] == $userid){
                $flag = TRUE;
                if($row['pass'] == $password){
                    
                    $updatesql = "UPDATE login SET pass = \"" . $newpass . "\" WHERE id = \"" . $userid . "\";";
                    $updateresult = mysqli_query($conn,$updatesql);

                    if($updatesql){
                        echo "PASSWORD CHANGED SUCCESSFULLY";
                    }
                    else{
                        echo "SOMETHING WENT WRONG";
                    }
                    break;
                }
                else{
                    echo "Incorrect Old Password";
                }
            }
            if(!$flag){
                echo "User Not Found";
            }
        }
    }
    else{
        echo "Cannot Connected Successfully";
    }
?>