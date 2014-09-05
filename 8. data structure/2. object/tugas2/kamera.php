<?php

class kamera {
    
    protected $hasilBagus;
    private $manualSetting;
    private $otomatisSetting;

    public function ambilGambar() {
	echo "Ambil gambar<br>";
	if($this->manualSetting) {
	    $this->hasilBagus = 1;
	} elseif($this->otomatisSetting) {
	    $this->hasilBagus = 2;
	} else {
	    $this->hasilBagus = 0;
	}
    }

    public function aturKamera() {
	echo "Atur Manual<br>";
	$this->manualSetting = true;
	$this->hasilBagus = 1;
	$this->ototmatisSetting = false;
    }

    public function aturOtomatis() {
	echo "Atur Otomatis<br>";
	$this->otomatisSetting = true;
	$this->hasilBagus = 2;
	$this->manualSetting = false;
    }
    
    public function apakahHasilBagus() {
	if($this->hasilBagus == 1) {
	    return "Kurang Bagus<br>";
	} elseif($this->hasilBagus == 2) {
	    return "Bagus<br>";
	} else {
	    return "Agak buram<br>";
	}
    }
}

$k = new kamera();
$k->ambilGambar();
echo "Apakah Hasil bagus : ". $k->apakahHasilBagus();
$k->aturKamera();
$k->ambilGambar();
echo "Apakah Hasil bagus : ". $k->apakahHasilBagus();
$k->aturOtomatis();
$k->ambilGambar();
echo "Apakah Hasil bagus : ". $k->apakahHasilBagus();
