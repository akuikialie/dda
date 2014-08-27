<?php

// nilai ujian
//$nilai = $_GET['nilai'];

/*
 * empty = Anda tidak mengikuti ujian
 * 0 - 60   : E
 * 61 - 70  : D
 * 71 - 80  : C
 * 81 - 90  : B
 * 91 - 100 : A
 */

if (empty($_GET['nilai'])){
	echo 'Anda tidak mengikuti ujian.';
	}elseif($_GET['nilai'] <= 60){
			echo 'Nilai anda E.';
		}elseif($_GET['nilai'] <= 70){
				echo 'Nilai anda D.';
			}elseif($_GET['nilai'] <= 80){
					echo 'Nilai anda C.';
				}elseif($_GET['nilai'] <= 90){
						echo 'Nilai anda B.';
					}elseif($_GET['nilai'] <= 100){
							echo 'Nilai anda A';
							}
