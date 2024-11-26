<?php

/**
 * input = 1
 * output = 1
 * 
 * input = 3
 * output = 3 2 1
 * 
 * input = 9
 * output = 9 8 7 ... 1
 * 
 * input = 11
 * output = 11 10 9 8 ... 1
 * 
 */

 echo "masukkan nilai no anda :";
 $input = trim(fgets(STDIN));

 for ( 
    $i = $input;
    $i >= 1;
    $i = $i - 1
 ) {
    echo " ";
    echo $i;
 };

 ?>