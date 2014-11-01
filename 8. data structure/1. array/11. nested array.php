<?php

$data = array(
	'Gresik' => array(
		'Kemuteran',
		'Duduk sampeyan',
		'Mbenjeng',
	),
	'Surabaya' => array(
		'Sukolilo',
		'Nginden',
		'Lidah Kulon',
	),
	'Sidoarjo' => array(
		'Tarik',
		'Ciro',
		'Ngelom',
	),
);

$no = 1;
foreach ($data as $key => $value) {
	echo '<strong>' . $key . '</strong>' . '<br />';
	
	foreach ($value as $k => $v) {
		echo ($k + 1) . '. ' . $v . '<br />';
	}
	
	echo '<br />';
}
