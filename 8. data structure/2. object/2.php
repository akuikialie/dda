<?php

class KipasAngin
{
	public $sedangMuter;
	
	public function muter()
	{
		echo 'Muter nih...<br />';
		$this->sedangMuter = 'Ya';
	}
	
	public function matikan()
	{
		echo 'Mati nih...<br />';
		$this->sedangMuter = 'Tidak';
	}
	
	public function apakahSedangMuter()
	{
		return $this->sedangMuter;
	}
}

$k = new KipasAngin();
$k->muter();
echo 'Sedang muter : ' . $k->apakahSedangMuter() . '<br />';
$k->matikan();
echo 'Sedang muter : ' . $k->apakahSedangMuter() . '<br />';

