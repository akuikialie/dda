<?php

function tampilkan_nama($nama)
{
	return 'Mr ' . $nama;
}

$nama = ucwords(strtolower(tampilkan_nama('aFaNDi')));

var_dump($nama);
