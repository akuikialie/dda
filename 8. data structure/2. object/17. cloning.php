<?php

class Hewan
{
	public $makanan = 'rumput';
	
	public $jumlahKaki = 4;
}

$hewan1 = new Hewan();
$hewan1->makanan = 'Daging';
$hewan1->jumlahKaki = 9;

$hewan2 = clone $hewan1;

var_dump($hewan1);
var_dump($hewan2);
