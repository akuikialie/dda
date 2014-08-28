<?php

$kalimat = '"Klien saya mulai disidang sejak Juli 2013," kata kuasa hukum Noesoediono, Rusdianto saat berbincang dengan detikcom, Sabtu (23/8/2014).';
var_dump($kalimat);

function dda_filter($x)
{
    $out = "";
    $out = substr($x, 1, 41);
    $out .= substr($x, 44, 29);
    $out .= substr($x, 74, 42);
    $out .= substr($x, 117, 7);
    $out .= substr($x, 125, 2);
    $out .= substr($x, 128, 1);
    $out .= substr($x, 130, 4);
    return strtolower($out);
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
