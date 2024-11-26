<?php

echo "Masukkan nopol mobil Anda : ";
$nopol = trim(fgets(STDIN));

$sisa_pembagian = $nopol % 2;

if ($sisa_pembagian == 1) {
    echo "Halo, nopol $nopol adalah ganjil !\n";
} else {
    echo  "Halo, nopol $nopol adalah genap !\n";
}