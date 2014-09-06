<?php

class Listrik {

    private $saklarSedangMenyala;
    private $lampuSedangMenyala;

    public function nyalakanSaklar()
    {
        if (!$this->saklarSedangMenyala) {
            echo "Saklar Dinyalakan<br>";
            $this->saklarSedangMenyala = true;
        } else {
            echo "Saklar Sudah Menyala<br>";
        }
    }

    public function matikanSaklar()
    {
        if ($this->saklarSedangMenyala) {
            $this->saklarSedangMenyala = false;
            echo "Saklar di matikan<br>";
        } else {
            echo "Saklar mati<br>";
        }
    }

    public function nyalakanLampu()
    {
        if ($this->saklarSedangMenyala) {
            echo "Lampu menyala<br>";
        } else {
            echo "Lampu mati<br>";
        }
    }

    public function matikanLampu()
    {
        if ($this->saklarSedangMenyala) {
            echo "Lampu mati<br>";
        }
    }

}

$l = new Listrik();
$l->matikanSaklar();
$l->nyalakanLampu();
$l->nyalakanSaklar();
$l->nyalakanLampu();
$l->matikanSaklar();
$l->nyalakanLampu();
$l->matikanLampu();

