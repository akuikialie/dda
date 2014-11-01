<?php

class Kota
{
	public $nama;
	
	public $propinsi;
	
	public $luas;
}

$jakarta = new Kota();
$jakarta->nama = 'Jakarta Timur';
$jakarta->propinsi = 'DKI Jakarta';
$jakarta->luas = '3000km2';

$surabaya = new Kota();
$surabaya->nama = 'Surabaya';
$surabaya->propinsi = 'Jawa Timur';
$surabaya->luas = '1500km2';

$daftarKota = array(
	$jakarta,
	$surabaya
);

foreach ($daftarKota as $k => $v) {
	echo $v->nama;
	echo '<br />========<br />';
	echo 'Propinsi : ' . $v->propinsi . '<br />';
	echo 'Luas : ' . $v->luas;
	echo '<br />';
	echo '<br />';
}
