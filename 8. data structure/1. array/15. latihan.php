<?php

$data = array(
	4,
	10,
	23,
	11,
	14,
	34,
	50,
	31,
);

// hitung angka paling tinggi
function get_max($array)
{
    $max = 0;
    foreach ($array as $v) {
        if($v > $max) {
	    $max = $v;
	}
    }
    return $max;
}

// 50
var_dump(get_max($data));
