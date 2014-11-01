<?php

function tambah(array $data)
{
	$data[] = 'Data Tambahan';
}

$data = array(
	'Surabaya',
	'Jakarta',
);

tambah($data);

var_dump($data);
