<?php

// abstract
abstract class Hewan
{
	public abstract function getJumlahKaki();
	
	public abstract function getCaraBerkembangBiak();
	
	public function makan()
	{
		echo 'makan';
	}
}

class Burung extends Hewan
{
	public function getJumlahKaki()
	{
		return 2;
	}
	
	public function getCaraBerkembangBiak()
	{
		return 'Bertelur';
	}
}

// $hewan1 = new Hewan();

$burung1 = new Burung();
var_dump($burung1->getJumlahKaki());
$burung1->makan();
