<?php

$data = array(
	0 => 2,
	1 => 6,
	2 => 4,
	2 => 9,
	3 => 14,
	4 => 6,
	5 => 7,
);

function tampilkan($data)
{
    echo PHP_EOL;
    $max = 0;
    for ($x = 0; $x < count($data); $x++) {
        if ($data[$x] > $max) {
            $max = $data[$x];
        }
    }
    
    $arr = array();
    for ($a = 0; $a < $max; $a++) {
        for ($i = 0; $i < count($data); $i++) {
            $tmp = $max - $data[$i];
            if ($a < $tmp) {
                echo " ";
            } else {
                echo "+";
            }
        }
        echo PHP_EOL;
    }
//    for ($a = $max - 1; $a >= 0; $a--) {
//        for ($b = count($data) - 1; $b >= 0; $b--) {
            
//           $arr[$a][$index]="+";
//            echo $a;
//        }
//        echo PHP_EOL;
//    }
//    echo PHP_EOL;

    /*    $arr[0][0]="_";
    $arr[1][0]="_";
    $arr[2][0]="_";
    $arr[3][0]="*";
    
    $arr[0][1]="*";
    $arr[1][1]="*";
    $arr[2][1]="*";
    $arr[3][1]="*";
    
    $arr[0][2]="_";
    $arr[1][2]="_";
    $arr[2][2]="*";
    $arr[3][2]="*";
    
    for ($a = 0; $a < count($arr); $a++) {
        for ($index = 0; $index < count($arr[$a]); $index++) {
           echo $arr[$a][$index];
        }
        echo "<br>";
    }
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";*/
}

/*

   *
   *
   *
   *
   *
   *
  **
  **
 ***
 ****
*****
*****
*****
*****
*****

*/
tampilkan($data);

