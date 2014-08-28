<?php

var_dump(ucwords('science afandi'));

// dilengkapi fungsinya supaya seperti ucwords
// - tidak boleh memanggil ucwords
function dda_ucwords($nama)
{
   $out =array();
   $getWord = explode(' ', $nama);
   for($i = 0; $i<count($getWord);$i++) {
      $out[] = ucfirst($getWord[$i]);
   }
   return implode(" ", $out);
}

var_dump(dda_ucwords('science afandi'));
