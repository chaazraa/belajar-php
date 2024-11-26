<?php

/**
 * input 
 * 5
 * output
 * 1 2 3 4 5
 * 1 2 3 4 5 
 * 1 2 3 4 5 
 * 1 2 3 4 5
 * 1 2 3 4 5 
 * input
 * 7
 * output
 * 1 2 3 4 5 6 7 
 * 1 2 3 4 5 6 7
 * 1 2 3 4 5 6 7
 * 1 2 3 4 5 6 7
 * 1 2 3 4 5 6 7
 * 1 2 3 4 5 6 7
 * 1 2 3 4 5 6 7 
 */

 echo "masukkan input kalian :";
 $input = trim(fgets(STDIN));


for (
    $i = 1; 
    $i <= $input; 
    $i++
) {
for (
    $j = 1; 
    $j <= $input; 
    $j++
) { 
    echo $j;
    echo " "; 
}
    echo "\n"; 
}
?>