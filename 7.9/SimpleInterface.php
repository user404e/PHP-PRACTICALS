<?php
	interface i1{
		public function a();
	}
	class demo implements i1{
		public function a(){
			echo "METHOD OF INTERFACE I1";
		}
	}
	$d = new demo();
	$d->a();
?>