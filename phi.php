<?php
// constant
define("PHI", 3.14159265358979323846);
echo "Masukkan jari-jari lingkaran: ";
$jarijari = trim(fgets(STDIN));

$luas = PHI * $jarijari * $jarijari;

echo "Luas Lingkaran dengan jari-jari $jarijari adalah $luas\n";