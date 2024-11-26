<?php

/**
 * input = 1
 * output = 1
 * 
 * input = 3
 * output = 1 2 3 2 1
 * 
 * input = 9
 * output = 1 2 3 4 5 6 7 8 9 8 7 ... 1
 * 
 * input = 11
 * output = 1 2 3 4 5 6 7 8 9 10 11 10 9 8 7 ... 1
 */

 echo "masukkan nilai input anda :";
 $input = trim(fgets(STDIN));

for (
    $i = 1; 
    $i < $input; 
    $i = $i + 1
) { 
    echo "$i "; 
}
for (
    $i = $input; 
    $i > 0; 
    $i = $i - 1
) { 
    echo "$i "; 
}
//.PHP_EOL = "\n"