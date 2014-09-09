<?php

abstract class Hewan
{
	public abstract function getJumlahKaki();
	
	final protected function isMakhlukHidup()
	{
		return true;
	}
}

class Ayam extends Hewan
{
	public function getJumlahKaki()
	{
		var_dump($this->isMakhlukHidup());
		return 2;
	}
}

$ayam = new Ayam();
var_dump($ayam->getJumlahKaki());
//var_dump($ayam->isMakhlukHidup());
