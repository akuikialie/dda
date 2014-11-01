<?php

class Sabun {
    
    private $apakahBersih = false;

    public function cuci() {
        if($this->apakahBersih) {
	}
    }
}

$s = new Sabun();
$s->jenisSabun = 'Tangan';
$s->apakahTanganBersih();
$s->cuciTangan();
$s->apakahTanganBersih();

