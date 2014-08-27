<?php

$data = array(
	'Jakarta Timur',
	'Jakarta Barat',
	'Jakarta Selatan',
	'Jakarta Utara',
	'Jakarta Pusat',
	'Bekasi',
);

function tampilkan_propinsi($datar_propinsi)
{
     for ($index = 1; $index <= count($datar_propinsi); $index++) {
        echo $index. ". ".$datar_propinsi[--$index]."<br>";
        $index++;
     }
}

tampilkan_propinsi($data);

// 1. Jakarta Timur 
// 2. Jakarta Barat
// 3. Jakarta Selatan
// 4. Jakarta Utara
// 5. Jakarta Pusat
// 6. Bekasi

// for
// count
// membaca array
