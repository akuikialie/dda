<?php

interface MakhlukBerkaki
{
	public function getJumlahKaki();
}

interface Hewan extends MakhlukBerkaki
{
	public function getJenisHewanBerdasarkanMakanan();
}

class Ayam implements Hewan
{
	public function getJenisHewanBerdasarkanMakanan()
	{
		return 'Omnivora';
	}
	
	public function getJumlahKaki()
	{
		return 2;
	}
}

$ayam = new Ayam();
echo $ayam->getJenisHewanBerdasarkanMakanan() . '<br />';
echo $ayam->getJumlahKaki() . '<br />';
