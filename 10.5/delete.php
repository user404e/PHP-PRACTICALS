<?php

    $name = $_POST['name'];


    $conn = mysqli_connect("localhost","root","","employee");

    if($conn){
        $sql = "SELECT Name FROM data";
        $result = mysqli_query($conn,$sql);

        $rowscount = mysqli_num_rows($result);
        
        if($rowscount == 0){
            echo "TABLE IS EMPTY";
        }
        else{
            $flag = FALSE;
            while($row = mysqli_fetch_assoc($result)){
                if($row['Name'] == $name){
                    $flag = TRUE;
                    $deletesql = "DELETE FROM data WHERE Name = \"" . $name . "\";";

                    $deleteresult = mysqli_query($conn,$deletesql);

                    if($deleteresult){
                        echo "Employee Profile Deleted Successfully";
                        break;
                    }
                }
                if(!$flag){
                    echo "User Not Found";
                }
            }
        }
        
    }
    else{
        echo "Cannot Connected Successfully";
    }
?>