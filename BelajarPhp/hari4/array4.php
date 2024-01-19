<?php

$angka1 = [1, 2, 3];
$angka2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

foreach ($angka1 as $perkalian1){
    foreach ($angka2 as $perkalian2){
        echo $perkalian1 . " x " . $perkalian2 . " = " . $perkalian1*$perkalian2 . "<br/>";
    }
}