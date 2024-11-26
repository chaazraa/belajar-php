<?php

/**
 *
 * Kotak Ajaib 4
 * input
 * 1, 2, 3, 4, 5, 6, 7
 * output
 * rata rata dari input
 * - baca input
 * - pecah input berdasarkan koma
 * - rubah input menjadi array
 * - rubah array menjadi integer
 * - hitung jumlah array
 * - hitung total array
 * - hitung rata rata
 * - tampilkan rata rata
 */

 // Baca input
 echo "Masukkan input: ";
 $input = trim(fgets(STDIN));
 
 // Pecah input berdasarkan koma
 $input = explode(",", $input); 
 
 // Ubah array menjadi integer
 foreach ($input as $key => $value) {
     $input[$key] = (int) trim($value); 
 }
 
 var_dump($input);
 
 // Hitung jumlah elemen array
 $jumlahElemen = count($input);
 
 // Hitung total elemen array
 $total = 0;
 foreach ($input as $value) {
     $total += $value; // Penjumlahan elemen array
 }
 
 var_dump($total);  
 
 // Hitung rata-rata dengan rumus: total / jumlah elemen array
 if ($jumlahElemen > 0) {
     $rataRata = $total / $jumlahElemen;
 } else {
     $rataRata = 0; // Tangani kasus array kosong
 }
 
 // Tampilkan hasil
 echo "Total elemen array: $jumlahElemen\n";
 echo "Total array: $total\n";
 echo "Rata-rata dari input: $rataRata\n";

//var_dump($input);