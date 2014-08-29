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

// hitung rata-rata
function get_average($array)
{
    $total = 0;
    $pembagi = count($array);
    foreach($array as $v) {
	$total += $v;
    }
    return $total / $pembagi;
}

// 
var_dump(get_average($data));
