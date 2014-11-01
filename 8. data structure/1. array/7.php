<?php

// key => value

$data = array(
	5  => 'Musang',
	10 => 'Luwak',
	18 => 'Buaya',
);

$data[20]   = 'Ular';
$data[5220] = 'Merak';

// 5. Musang
// 10. Luwak
// 18. Buaya
// 20. Ular

foreach ($data as $key => $value) {
	echo $key . '. ' . $value . '<br />';
}
