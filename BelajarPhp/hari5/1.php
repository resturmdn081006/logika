<?php

function cekPembagian($angka, $pembagi) {
    return $angka % $pembagi == 0;
}

function hitungPembagian($angka) {
    $hasilPembagian = [];

    $pembagii = [3, 5, 7, 10];

    foreach ($pembagii as $pembagi) {
        if (cekPembagian($angka, $pembagi)) {
            $hasilPembagian[] = $pembagi;
        }
    }

    return $hasilPembagian;
}

$angka = 1000;

$hasilPembagian = hitungPembagian($angka);

if (in_array(5, $hasilPembagian) && in_array(10, $hasilPembagian)) {
    echo "Angka $angka bisa dibagi dengan angka 5 dan 10";
} elseif (in_array(5, $hasilPembagian)) {
    echo "Angka $angka bisa dibagi dengan angka 5 saja";
} else {
    echo "Angka $angka tidak bisa dibagi dengan angka 5";
}


?>
