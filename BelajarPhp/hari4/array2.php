<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokSatu = array_intersect($bil1, $bil2);
$kelompokDua = array_merge(array_diff($bil1, $bil2), array_diff($bil1, $bil2));

echo "kelompok 1 ";
print_r($kelompokSatu);
echo "<br/>";
echo "kelompok 2 ";
print_r($kelompokDua);