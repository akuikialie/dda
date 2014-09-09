<?php

class Hewan
{
	const makanan = 'rumput';
	
	public function makan()
	{
		echo 'Makan ' . self::makanan;
	}
}

$hewan = new Hewan();
$hewan->makan();

var_dump(Hewan::makanan);
