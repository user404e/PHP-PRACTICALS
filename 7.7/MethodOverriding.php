<?php

class demo1
{
	public function greet()
	{
		return 'Hello!';
	}
}

class demo2 extends demo1
{
	public function greet()
	{
		return 'Hi';
	}
}

$d1 = new demo1();
echo $d1->greet();

$d2 = new demo2();
echo $d2->greet();

?>