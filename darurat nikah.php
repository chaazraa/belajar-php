<?php

echo "Masukkan nama Anda: ";
$nama =trim(fgets(STDIN)); 
echo "Masukkan jenis kelamin Anda: ";
$jenis_kelamin =trim(fgets(STDIN));
echo "Masukkan umur Anda: ";
$umur =trim(fgets(STDIN));
// Membaca Input dari pengguna

$jenis_kelamin_cewe = "cewe";
$jenis_kelamin_cowo = "cowo" ;
$batasan_umur_cewe = "27" ; 
$batasan_umur_cowo = "28";

if ($umur <= $batasan_umur_cewe ) {
    echo "heyy, $nama umur $umur $jenis_kelamin_cewe belum segera nikah lho !\n";
} else {
    echo "waww, $nama umur $umur $jenis_kelamin_cewe sudah segera nikah lho !\n";
} 
if ($umur <= $batasan_umur_cowo ) {
    echo "heyy, $nama umur $umur $jenis_kelamin_cowo belum segera nikah lho !\n";
} else {
    echo "waww, $nama umur $umur $jenis_kelamin_cowo sudah segera nikah lho !\n";
} 