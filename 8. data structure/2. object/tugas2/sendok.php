<?php

class Sendok {
    
    public $apakahBengkok;
	
    public function pakai() {
        if ($this->apakahBengkok) {
	    echo "Maaf, sendok bengkok<br>";
        } else {
            echo "Pakai sendok<br>";
	}
    }
    
    public function pukulPalu() {
	echo "Sendok di pukul<br>";
        $this->apakahBengkok = true;
    }
    
    public function apakahBengkok() {
        if ($this->apakahBengkok) {
            echo "Sendok bengkok<br>";
        } else {
            echo "Sendok tidak bengkok<br>";
	}
    }
}

$s = new Sendok();
$s->pakai();
$s->pukulPalu();
$s->apakahBengkok();
$s->pakai();
