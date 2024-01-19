<?php

// // no 1
// $nilai = 83;

// if ($nilai >= 78 ) {
//     echo "nilai kompeten ";
// } elseif ($nilai <= 78 ) {
//     echo "nilai belum kompeten ";
// } 


// // no 2
// $a = '7';

// if ($a === '7'){
//     echo "string";
// } else{
//     echo "numeric";
// }


// // no 3
// $b = '';

// if ($b == ''){
//     echo "tidak memiliki value";
// } else {
//     echo "memiliki value";
// }


// // no 4
// $hasilUjian = 90;

// if ($hasilUjian >= 90 && $hasilUjian <= 100){
//     echo "Predikat A";
// } elseif ($hasilUjian >= 75 && $hasilUjian <= 90){
//     echo "Predikat B";
// } else{
//     echo "Predikat C";
// }


// // no 5
// $belanja = 154000;
// $diskon = 0;

// if ($belanja >= 100000){
//     $diskon = 7 / 100 * $belanja;
// }

// $bayar = $belanja - $diskon;

// echo "membayar sebesar Rp." .number_format($bayar);


// // no 6
// for ($a = 1; $a <= 25; $a++) {
//     if ($a % 4 == 0 && $a % 5 == 0) {
//         echo $a . "";
//     }
// }


// // no 7
// $angka = 90;
// $dari = 3;
// $hingga = 30;

// $jumlahPembagian = 0;

// for ($i = 3; $i <= 30; $i += 3){
//     if (90 % $i === 0){
//         $jumlahPembagian++;
//         echo "<br/>";
//         echo $i;    
//     }    
// }
// echo "<br/>";
// echo "angka $angka bisa di bagi kelipatan 3 sebanyak $jumlahPembagian kali";


// // no 8
// $usiaAndi = 25 / 4; 
// $mtk = 83;
// $indo = 87;
// $ing = 86;

// $usiaMin = 16;
// $usiaMax = 25;
// $mtkMin = 87;
// $indoMin = 87;
// $ingMin = 85;
// $rataRataMin = 85;

// $status = "Ditolak";

// if ($usiaAndi >= $usiaMin && $usiaAndi <= $usiaMax) {

//     if ($mtk >= $mtkMin && $indo >= $indoMin && $ing >= $ingMin) {
//         $rataRata = ($mtk + $indo + $ing) / 3;

//         if ($rataRata >= $rataRataMin) {
//             $status = "Diterima";
//         }
//     }
// }

// echo "Status Andi: $status";


// // no 9
// $tb = 148; 
// $bb = 44; 

// $tinggiBadan = $tb / 100;
// $hitung = $bb / ($tinggiBadan * $tinggiBadan);

// if ($hitung > 25) {
//     echo "$hitung Obesitas.";
// } elseif ($hitung >= 22.9 && $hitung < 24.9) {
//     echo "$hitung Lebih.";
// } elseif ($hitung >= 18.5 && $hitung < 22.9) {
//     echo "$hitung Normal.";
// } else {
//     echo "Kurang .";
// }
?>
