<?php

class Lampu
{
	public static $counter = 0;
	
	public function nyala()
	{
		self::$counter++;
	}
	
	public function mati()
	{
	}
}

echo Lampu::$counter;

$lampu1 = new Lampu();
$lampu1->nyala();

echo Lampu::$counter;

$lampu2 = new Lampu();
$lampu2->nyala();

echo Lampu::$counter;
