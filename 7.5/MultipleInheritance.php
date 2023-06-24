<?php
	interface i1{
		public function a();
	}
	interface i2{
		public function b();
	}
	class demo implements i1,i2{
		public function a(){
			echo "METHOD OF I1 <br>";
		}
		public function b(){
			echo "METHOD OF I2";
		}
	}
	$d = new demo();
	$d->a();
	$d->b();
?>