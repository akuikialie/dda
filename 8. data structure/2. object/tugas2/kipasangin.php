<?php

class KipasAngin {

    protected $kecepatanKipas;
    public $maximalPemakaian;
    private $sedangMenyala;

    public function nyalakan()
    {
        if ($this->maximalPemakaian <= 0) {
            echo "Maaf, kipas angin sudah tidak bisa digunakan.<br>";
        } else {
            if ($this->sedangMenyala) {
                echo "Maaf, kipas angin sudah menyala<br>";
            } else {
                echo "Angin semilir loh!" . $this->maximalPemakaian . "<br>";
                $this->sedangMenyala = true;
                --$this->maximalPemakaian;
            }
        }
    }

    public function matikan()
    {
        echo "Kipas dimatikan<br>";
        $this->sedangMenyala = false;
    }

    public function tambahKecepatan()
    {
        if ($this->sedangMenyala) {
            if ($this->kecepatanKipas >= 3) {
                echo "Maaf, kecepatan kipas angin sudah maksimal<br>";
            } else {
                echo "Kecepatan kipas angin bertambah.<br>";
                ++$this->kecepatanKipas;
            }
        } else {
            echo "Maaf, Kipas angin sedang off.<br>";
        }
    }

}

$ka = new \KipasAngin();
$ka->maximalPemakaian = 2;
$ka->nyalakan();
$ka->tambahKecepatan();
$ka->tambahKecepatan();
$ka->tambahKecepatan();
$ka->matikan();
$ka->nyalakan();
$ka->matikan();
$ka->nyalakan();

