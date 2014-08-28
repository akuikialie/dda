<?php

$data = array(
	0 => 5,
	1 => 7,
	2 => 3,
	3 => 8,
	4 => 12,
);


function tampilkan($data)
{
   foreach($data as $v){
    	for($i=0;$i<$v;$i++){
            echo "*";
	}
	echo "<br>";
    }
}

/*

*****
*******
***
********
************

*/

tampilkan($data);
