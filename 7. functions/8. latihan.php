<?php

$kalimat = '"Klien saya mulai disidang sejak Juli 2013," kata kuasa hukum Noesoediono, Rusdianto saat berbincang dengan detikcom, Sabtu (23/8/2014).';
var_dump($kalimat);

function dda_filter($x)
{
}

// klien saya mulai disidang sejak juli 2013 kata kuasa hukum noesoediono rusdianto saat berbincang dengan detikcom sabtu 2382014
// karakter yg diambil = a-z, 0-9
// - strlen
// - substr
// - ucwords
// - ucfirst
// - strtoupper
// - strtolower
var_dump(dda_filter($kalimat));
