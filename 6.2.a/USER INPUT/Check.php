<?php
    $s = $_POST['s'];

    if(strtolower($s) == $s){
        echo "Given String Is In Lower Case";
    }
    else{
        echo "Given String Is Not In Lower Case";
    }

?>