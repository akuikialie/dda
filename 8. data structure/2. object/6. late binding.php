<?php

class SepedaMotor
{
	public function getCc()
	{
		return $this->cc;
	}
	
	public function gantiOli()
	{
		return 'Ganti oli ' . $this->getMerkOli();
	}
}

class Supra extends SepedaMotor
{
	public $cc = '125';
	
	public function getMerkOli()
	{
		return 'Castrol';
	}
}

$supra1 = new Supra();
echo $supra1->getCc() . '<br />';
echo $supra1->gantiOli();
