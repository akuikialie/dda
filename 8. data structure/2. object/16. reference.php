<?php

class Hewan
{
	public $makanan = 'Rumput';
}

function test(Hewan $hewan)
{
	$hewan->makanan = 'Dedek';
}

$hewan  = new Hewan();
$hewan2 = new Hewan();
test($hewan2);

var_dump($hewan->makanan);

