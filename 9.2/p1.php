<?php
    setcookie("name","abc",time() + 10);

    echo $_COOKIE["name"];
?>