<?php

class Wajan {

    public $sedangKotor;

    public function apakahKotor() {
    	if ($this->sedangKotor) {
	    echo "Wajan sedang kotor<br>";
	} else {
	    echo "Wajan tidak kotor<br>";
	}
    }

    public function pakaiMasak() {
    
    }


}

$w = new Wajan();
$w->apakahKotor();
$w->pakaiMasak();
$w->apakahKotor();
$w->cuci();
$w->apakahKotor();
$w->pakaiMasak();
