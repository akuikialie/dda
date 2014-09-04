<?php

class Hewan
{
	private $caraMakan = 'digigit, dikunyah, ditelan';
	
	public function berjalan()
	{
		echo 'Berjalan dengan 4 kaki';
	}
	
	public function makan()
	{
		echo 'Mulai makan dengan cara ' . $this->caraMakan;
	}
}

class Burung extends Hewan
{
	/**
	 * overriding
	 */
	public function berjalan()
	{
		echo 'Berjalan dengan 2 kaki';
	}
	
	public function makan()
	{
		echo 'Mulai makan dengan cara ' . $this->caraMakan;
	}
}

$hewan1 = new Hewan();
$hewan1->berjalan();
$hewan1->makan();

echo '<br />';

$burung1 = new Burung();
$burung1->berjalan();
$burung1->makan();
$burung1->caraMakan;
