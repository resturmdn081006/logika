<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($bilangan as $angka){
    if ($angka >= 75){
        echo "$angka kelompok kompeten <br/>";
    } else{
        echo "$angka kelompok belum kompeten <br/>";
    }
}