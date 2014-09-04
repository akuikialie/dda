<?php

class KipasAngin
{
	public $warna;
	
	/**
	 * public | private | protected
	 */
	protected $sedangMuter;
	
	public function muter()
	{
		$this->sedangMuter = true;
	}
	
	public function berhenti()
	{
		$this->sedangMuter = false;
	}
}

$kipasAngin = new KipasAngin();
$kipasAngin->muter();
var_dump($kipasAngin->sedangMuter);
$kipasAngin->berhenti();
$kipasAngin->sedangMuter = 'berhenti';
var_dump($kipasAngin->sedangMuter);
