<?php

// deklarasi array
$users = array(
	'andy',
	'afandi',
	'isal',
	'iqbal',
	'akhyar',
);

// access array
var_dump($users[0]);
var_dump($users[1]);
var_dump($users[4]);

// unset
unset($users[2]);
var_dump($users);

