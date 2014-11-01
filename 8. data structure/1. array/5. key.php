<?php

$data = array(
	'Jakarta',
	'Bogor',
	'Bekasi',
);

$data[1] = 'Bandung';
$data[]  = 'Depok';

// key => value

$data[8]  = 'Sumatera';
$data[10] = 'Tangerang';

var_dump($data);
var_dump(count($data));
