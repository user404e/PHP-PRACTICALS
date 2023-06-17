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

$demo1 = new demo1();
echo $demo1->greet();

$demo2 = new demo2();
echo $demo2->greet();

?>