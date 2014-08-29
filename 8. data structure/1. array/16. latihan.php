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

// hitung angka paling rendah
function get_min($array)
{
    $min = $array[0];
    for ($q = 0; $q < count($array); $q++) {
        if($min > $array[$q]){
            $min = $array[$q];
        }
    }
    return $min;
}

// 4
var_dump(get_min($data));
