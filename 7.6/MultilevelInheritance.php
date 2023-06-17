<?php
    class a{
        public $s1 = "Hiii";
    }
    class b extends a{
        public $s2 = " there";
    }
    class c extends b{
        public $s3 = " , Welcome !";
    }

    $c1 = new c();
    echo $c1->s1 . $c1->s2 . $c1->s3;
?>