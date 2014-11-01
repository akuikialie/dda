<?php

// associative array

$data = array(
	'Tomat' => 'Merah',
	'Kentang' => 'Kuning',
	'Bayam' => 'Hijau',
);

$data['Nasi'] = 'Putih';
$data['Kentang'] = 'Cokelat';
$data[20] = '20';
$data[6] = '5.5';
$data[true] = false;
$data[false] = true;
$data[null] = 'null';

foreach ($data as $k => $v) {
	echo $k . ' = ' . $v . '<br />';
}

