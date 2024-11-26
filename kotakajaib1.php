<?php

/**
 * input = 1
 * output = 1
 * 
 * input = 3
 * output = 1 2 3 
 * 
 * input = 9
 * output = 1 2 3 4 5 6 7 8 9
 * 
 * input = 15
 * output = 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15
 */

 echo "Masukkan nilai no Anda : ";
$input = trim(fgets(STDIN));

 //$no = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
 //var_dump($no);
 for ( 
    $i = 1;
    $i <= $input;
    $i = $i + 1
 ) {
    echo " ";
    echo $i;
 };

 ?>