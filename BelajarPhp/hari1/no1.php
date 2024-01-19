<?php

$usiaAndi = 16;
$usiaBeni = $usiaAndi + 3;

$tahunLahirDani = date("Y") - $usiaAndi;

$tahunLahirEko = date("Y") - $usiaBeni - 5;

function isTahunKabisat($tahun) {
    return (($tahun % 4 == 0) && ($tahun % 100 != 0)) || ($tahun % 400 == 0);
}

echo "Tahun kelahiran Andi: " . (date("Y") - $usiaAndi) . "\n";
echo "Tahun kelahiran Beni: " . $tahunLahirDani . "\n";
echo "Tahun kelahiran Eko: " . $tahunLahirEko . "\n";

if (isTahunKabisat(date("Y") - $usiaAndi)) {
    echo "Andi lahir di tahun kabisat.\n";
} else {
    echo "Andi tidak lahir di tahun kabisat.\n";
}

if (isTahunKabisat($tahunLahirEko)) {
    echo "Eko lahir di tahun kabisat.\n";
} else {
    echo "Eko tidak lahir di tahun kabisat.\n";
}

?>
