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
        if ($this->sedangKotor) {
	    echo "Mohon wajan dicuci dulu, <br>";
	} else {
	    echo "Wajan dipakai<br>";
            $this->sedangKotor = true;
        }
    }

    public function cuci() {
        if ($this->sedangKotor) {
	    echo "Wajan dicuci<br>";
            $this->sedangKotor = false;
	} else {
	    echo "Wajan sudah bersih<br>";
        }
        
    }
}

$w = new Wajan();
$w->apakahKotor();
$w->pakaiMasak();
$w->apakahKotor();
$w->cuci();
$w->apakahKotor();
$w->pakaiMasak();
