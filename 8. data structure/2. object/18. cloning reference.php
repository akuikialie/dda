<?php

class Manusia
{
	public $peliharaan;
	
	public $jenisKelamin = 'laki2';
}

class Hewan
{
	public $makanan = 'rumput';
}

$manusia = new Manusia();
$hewan   = new Hewan();
$manusia->peliharaan = $hewan;
$manusia2 = clone $manusia;
$manusia->jenisKelamin = 'wanita';

$manusia->peliharaan->makanan = 'daging';

//var_dump($manusia);
//var_dump($manusia2);

var_dump($manusia->peliharaan);
