<?php

$data = array(
	5  => 'Kentang',
	10 => 'Tomat',
	18 => 'kentang',
	20 => 'Sayur',
	23 => 'kenTang',
);

$data2 = array_unique($data);

var_dump($data);
var_dump($data2);

echo '<br >';
$no = 0;
foreach ($data as $k => $v) {
	echo ++$no . '. ' . $v . '<br />';
}
