<?php

$username = '';
if (isset($_GET['username'])) {
	$username = $_GET['username'];
}

$password = '';
if (!empty($_GET['password'])) {
	$password = $_GET['password'];
}

if (empty($username) && empty($password)) {
	echo 'Masukkan username dan password.';
} elseif (empty($username)) {
	echo 'Masukkan username.';
} elseif (empty($password)) {
	echo 'Masukkan password.';
} elseif ($username == 'dda' && $password == 'enter') {
	echo 'Berhasil Login.';
} else {
	echo 'Username atau Password salah.';
}

/*
if (empty($username) && empty($password)) {
	echo 'Masukkan username dan password.';
} else {

	if (empty($username)) {
		echo 'Masukkan username.';
	} else {

		if (empty($password)) {
			echo 'Masukkan password.';
		} else {

			if ($username == 'dda' and $password == 'enter') {
				echo 'Berhasil login';
			} else {
				echo 'Username atau Password salah';
			}
		}
	}
}
*/
