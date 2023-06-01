<?php

    $userid = $_POST['id'];
    $password = $_POST['pass'];

    $conn = mysqli_connect("localhost","root","","employee");

    if($conn){
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn,$sql);

        $flag = FALSE;
        while($row = mysqli_fetch_assoc($result)){
            if($row['id'] == $userid){
                $flag = TRUE;
                if($row['pass'] == $password){
                    echo "Login Successfully";
                    break;
                }
                else{
                    echo "Incorrect Password";
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