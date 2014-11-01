<?php

$grade = $_GET['grade'];

if ($grade == 'C') {
	echo 'Cukup';
} elseif ($grade == 'B') {
	echo 'Baik';
} elseif ($grade == 'A') {
	echo 'Baik Sekali';
}

echo '<br />';

switch ($grade) {
	case 'C':
		echo 'Cukup';
		//break;
	case 'B':
		echo 'Baik';
		//break;
	case 'A':
		echo 'Baik Sekali';
		//break;
}
