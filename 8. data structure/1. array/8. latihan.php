<?php

$kota = array(
	1 => 'Jakarta',
	2 => 'Bogor',
	3 => 'Depok',
	4 => 'Tangerang',
	5 => 'Bekasi',
	6 => 'Bandung',
	7 => 'Sukabumi',
);

$kota2 = array(
	'Jakarta',
	'Tangerang',
	'Sukabumi',
);

function ambil_kota3($kota, $kota2)
{
}


// kota 3 berisi kota yang tidak terdapat di kota2
// array(3) {
//   [2] => string(5) "Bogor"
//   [3] => string(5) "Depok"
//   [5] => string(6) "Bekasi"
//   [6] => string(6) "Bandung"
// }

var_dump(ambil_kota3($kota, $kota2));
