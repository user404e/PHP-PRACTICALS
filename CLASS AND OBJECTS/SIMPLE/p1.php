<?php
    class Book{
        var $book_name;
        var $book_price;

        function setData($bname,$bprice){
            $this->book_name = $bname;
            $this->book_price = $bprice;
        }
        
        function printData(){
            echo "<h1> BOOK TITLE = " . $this->book_name . "</h1><br>";
            echo "<h1> BOOK PRICE = " . $this->book_price . "</h1><br>";
        }
    }
    $b1 = new Book();
    $b1->setData("PHP THE COMPLETE REFFERENCE",400);
    $b1->printData();
?>