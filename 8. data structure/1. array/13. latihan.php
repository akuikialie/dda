<?php

$data = array(
	0 => 2,
	1 => 6,
	2 => 4,
	2 => 9,
	3 => 14,
	4 => 6,
);

/*

**
**
 *
 * 
 *  

 *  */

function tampilkan($data)
{
    echo PHP_EOL;
    $max = 0;
    for ($x = 0; $x < count($data); $x++) {
        if ($data[$x] > $max) {
            $max = $data[$x];
        }
    }
//    for ($a = 0; $a < $max; $a++) {
//        for ($q = 0; $q < count($data); $q++) {
//            if ($a < $data[$q]) {
//                echo "*";
//            } else {
//                echo " ";
//            }
//        }
//        echo PHP_EOL;
//    }
    
    for ($i = 0; $i < $max; $i++) {//loop baris
        for ($q = 0; $q < count($data); $q++) {//loop kolom
//        echo $q;
//            echo ">".$max * $q."<";
//            echo "*>".$q + $q."<*";
//            $tmp = ($max * $q) - ($q + $q);
//            echo ">".$tmp."<";
//            echo $i;
//            echo $q. "&".$i;
            if ($i < $data[$q]) {
                echo "*";
            } else {
                echo " ";
            }
        }
        
        echo PHP_EOL;
////        for ($q = 0; $q <$data[$i] ; $q++) {
////            echo "*";
//////        for ($q = 0; $q <($max-$data[$i]) ; $q++) {
////            echo PHP_EOL;
//////        }
////        }
    }
}

/*

*****
*****
*****
*****
*****
 ****
 ***
  **
  **
   *
   *
   *
   *
   *

 */
tampilkan($data);
echo PHP_EOL;
echo PHP_EOL;

