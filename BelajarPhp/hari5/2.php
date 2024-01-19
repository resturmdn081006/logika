<?php


$waktukerja = 8;
$IstirahatSolat = 20;
$IstirahatMakan = 30;

function menghitung($waktukerja,$IstirahatSolat,$IstirahatMakan){

$waktukerja1 = $waktukerja*60;

$TotalIstirahat = $IstirahatMakan + $IstirahatSolat;
$kerja = $waktukerja1 - $TotalIstirahat;

return ['kerja' => $kerja , 'Waktuistirahat' => $TotalIstirahat];
}

$hasil = menghitung($waktukerja,$IstirahatSolat,$IstirahatMakan);
echo "waktu kerja " . $hasil['kerja'] . " menit\n" . "<br/>";
echo "waktu istirahat " . $hasil['Waktuistirahat'] . " menit\n";