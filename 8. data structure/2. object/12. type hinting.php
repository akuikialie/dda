<?php

interface Peliharaan
{
	public function makan();
}

class Ayam implements Peliharaan
{
	protected $porsiMakan = 1;
	
	public function setPorsiMakan($jumlah)
	{
		$this->porsiMakan = $jumlah;
	}
	
	public function getPorsiMakan()
	{
		return $this->porsiMakan;
	}
	
	public function makan()
	{
		echo 'Ayam makan ' . $this->porsiMakan . ' cacing<br />';
	}
}

class Manusia
{
	public function memelihara(Peliharaan $peliharaan)
	{
		echo 'Manusia memberi makan peliharaan<br />';
		$peliharaan->makan();
	}
}

class Tumbuhan implements Peliharaan
{
	public function makan()
	{
		echo 'Tumbuhan makan air dan tanah';
	}
}

$tumbuhan = new Tumbuhan();

$ayam1 = new Ayam();
$ayam1->setPorsiMakan(5);

$ayam2 = new Ayam();
$ayam2->setPorsiMakan(3);

$manusia = new Manusia();

$manusia->memelihara($ayam1);
$manusia->memelihara($ayam2);
$manusia->memelihara($tumbuhan);
