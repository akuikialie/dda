<?php

$a = 'abc';
var_dump($a);

// null
var_dump($b);

// null
unset($a);
var_dump($a);

// check if variable exist
$d = '';
var_dump(isset($d));
var_dump(isset($zzzzzz));
