<?php

class Bantal {
    private $apakahKotor;
    private $jumlahPemakaian = 3;
    
    public function pakai() {
///    	if($this->jumlahPemakaian ) {
//	   echo $
//	}
        --$this->jumlahPemakaian;
    }
    
    public function cekPemakaian() {
        $respond = "Jumlah Pemakaian saat ini : ".$this->jumlahPemakaian;
	return $respond;
    }
}


$bantal = new Bantal();
$bantal->pakai();
$bantal->pakai();
$bantal->pakai();
//$bantal->cuci();
$bantal->pakai();
echo $bantal->cekPemakaian();
