<?php

$jam = 18;
$menit = 17;

if ($jam >= 07 && $jam <= 11){
    if ($menit <= 60){
        echo "waktu kerja";
    }
 } elseif ($jam > 11 && $jam <= 12){
    if($menit <= 15){
        echo "waktu istirahat";
    }
 } elseif ($jam > 12 && $jam < 16){
    if ($menit <= 60){
        echo "waktu kerja";
    }
 } elseif ($jam >= 16 or $jam < 07){
    if ($menit >= 00){
        echo "bukan waktu kerja";
    }
 }