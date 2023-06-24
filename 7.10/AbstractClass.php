<?php
	abstract class demo{
		public function d1(){
			echo "Method D1 <br>";
		}
		abstract function d2();
	}
	class demo2 extends demo{
		public function d2(){
			echo "Method D2";
		}
	}

	$d = new demo2();
	$d->d1();
	$d->d2();
?>