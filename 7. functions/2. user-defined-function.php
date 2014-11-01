<?php

var_dump(strtoupper('abc'));

function tampilkan_urutan($mulai, $selesai)
{
	for ($i = $mulai; $i <= $selesai; $i++) {
		echo $i . '<br />';
	}
}

echo '<br />';
tampilkan_urutan(1, 3);
echo '<br />';
tampilkan_urutan(1, 5);
echo '<br />';
tampilkan_urutan(3, 9);
