<?php

// pass by reference
function test($x) {
	$x += 5;
}

$var = 10;
test($var);

var_dump($var);

