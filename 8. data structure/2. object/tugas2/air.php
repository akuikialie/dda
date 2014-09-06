<?php

class Air {

    protected $bisaDiMinum;
    private $jenis;

    public function ada($jenisAir)
    {
        $this->jenis = $jenisAir;
        echo "Ada air " . $this->jenis . "<br>";
    }

    public function masak()
    {
        echo "Air " . $this->jenis . " telah di masak<br>";
        $this->bisaDiMinum = "Iya";
    }

    public function apakahDapatDiMinum()
    {
        if ($this->bisaDiMinum === "Iya") {
            echo "Air " . $this->jenis . " dapat diminum<br>";
        } else {
            echo "Air " . $this->jenis . " tidak dapat diminum<br>";
        }
    }

}

$air = new Air();
$air->ada('Galon');

$air->apakahDapatDiminum();

$air->masak();

$air->apakahDapatDiminum();


//var_dump($air);
