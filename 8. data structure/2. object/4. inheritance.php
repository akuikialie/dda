<?php

class Tumbuhan
{
	public $warnaBunga = 'hijau';
	
	public function getJenisAkar()
	{
		return 'Serabut';
	}
}

class PohonMangga extends Tumbuhan
{
	public function getBuah()
	{
		return 'Buah Mangga';
	}
	
	public function ubahWarnaBunga($warna)
	{
		$this->warnaBunga = $warna;
	}
}

class PohonJambu extends PohonMangga
{
	public function getBuah()
	{
		return 'Buah Jambu';
	}
	
	public function ubahWarnaBunga($warna)
	{
		$this->warnaBunga = $this->getBuah();
	}
}

$pohonMangga1 = new PohonMangga();
echo $pohonMangga1->getBuah();
echo $pohonMangga1->getJenisAkar();
$pohonMangga1->ubahWarnaBunga('merah');
echo $pohonMangga1->warnaBunga;

echo '<br />';
$pohonJambu1 = new PohonJambu();
echo $pohonJambu1->getBuah();
echo $pohonJambu1->getJenisAkar();
$pohonJambu1->ubahWarnaBunga('');
echo $pohonJambu1->warnaBunga;
