<?php

class Rumput {
   
    public $sudahPanjang = true;

    public function apakahSudahPanjang()
    {
	if($this->sudahPanjang) {
	    echo "Iya<br>";
	} else {
	    echo "Tidak<br>";
	}
    }

    public function potong()
    {
	if(!$this->sudahPanjang) {
	    echo "Tidak perlu di potong<br>";
	} else {
	    echo "Dipotong<br>";
	}
    }
}

$r = new Rumput();
echo "Apakah rumput sudah panjang? ".$r->apakahSudahPanjang();
$r->potong();
echo "Apakah rumput sudah panjang? ".$r->apakahSudahPanjang();
