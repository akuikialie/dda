<?php

$row = mysql_fetch_row();
if ($row !== null) {
	var_dump($row);
}


if (($row = mysql_fetch_row()) !== null) {
	var_dump($row);
}
