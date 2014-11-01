<?php

class Motor {

    private $sedangBocor = false;
    private $sedangKenaPaku;

    public function apakahBocor()
    {
        if ($this->sedangBocor) {
            echo "Ban Motor Sedang bocor<br>";
        } else {
            echo "Ban motor normal<br>";
        }
    }

    public function pakai()
    {
        if ($this->sedangBocor) {
            echo "Motor Sedang bocor, tidak bisa dipakai<br>";
        } else {
            echo "Motor bisa dipakai<br>";
        }
    }

    public function terkenaPaku($input)
    {
        if ($input) {
            echo "Ban motor terkena paku<br>";
            $this->sedangBocor = true;
        }
        $this->sedangKenaPaku = $input;
    }

    public function tambal()
    {
        if ($this->sedangBocor) {
            echo "Ban motor ditambal<br>";
            $this->sedangBocor = false;
        } else {
            echo "Ban motor tidak bocor<br>";
        }
    }

}

$m = new Motor();
$m->apakahBocor();
$m->pakai();
$m->terkenaPaku(true);
$m->pakai();
$m->tambal();
$m->apakahBocor();
$m->pakai();
