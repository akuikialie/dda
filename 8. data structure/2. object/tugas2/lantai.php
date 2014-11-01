<?php

class Lantai {

    public $luasLantai;
    public $ukuranPanjangKeramik;
    public $ukuranLebarKeramik;
    private $jumlahKeramik;
    private $luasTiapKeramik;

    public function hitungJumlahKeramikYangDibutuhkan()
    {
        $this->luasTiapKeramik = $this->cmToM($this->ukuranPanjangKeramik) * $this->cmToM($this->ukuranLebarKeramik);
        echo "Luas Tiap Keramik : " . (float) $this->luasTiapKeramik . "m2<br>";
        echo "Luas Lantai : " . (float) $this->luasLantai . "m2<br>";
        $hitung = $this->luasLantai / $this->luasTiapKeramik;
        echo "Jumlah Keramik : " . round($hitung) . "";
    }

    private function cmToM($cm)
    {
        return $cm / 100;
    }

}

$l = new \Lantai();
$l->luasLantai = 1; //satuan meter kubik
$l->ukuranPanjangKeramik = 34; //satuan centimeter 
$l->ukuranLebarKeramik = 34; //satian centimeter
$l->hitungJumlahKeramikYangDibutuhkan();
