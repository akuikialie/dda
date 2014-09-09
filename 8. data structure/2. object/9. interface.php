<?php

interface MakhlukBerkaki
{
	public function getJumlahKaki();
	
	public function getUkuranKaki();
}

interface MakhlukBerekor
{
	public function getPanjangEkor();
}

abstract class Hewan
{
	public abstract function getJumlahKaki();
	
	public function makan()
	{
		echo 'makan';
	}
}

class Ayam extends Hewan implements MakhlukBerkaki, MakhlukBerekor
{
	public function getJumlahKaki()
	{
		return 2;
	}
	
	public function getPanjangEkor()
	{
		return 'cukup panjang';
	}
	
	public function getUkuranKaki()
	{
		return 'kecil';
	}
}

$ayam = new Ayam();
var_dump($ayam->getJumlahKaki());
var_dump($ayam->getUkuranKaki());
var_dump($ayam->getPanjangEkor());
$ayam->makan();
